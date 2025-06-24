// Определение зон доставки с координатами и ценами
const deliveryZones = [
    {
        name: 'Центр',
        price: 300,
        color: '#ff000055',
        coordinates: [
            [54.744587485381096, 55.9492946242675],
            [54.722968536460186, 55.926364515594535],
            [54.71322983444198, 55.97288474874886],
            [54.74299850559028, 55.99195247644033],
            [54.744587485381096, 55.9492946242675]
        ]
    },
    {
        name: 'Проспект Октября',
        price: 550,
        color: '#00ff0055',
        coordinates: [
            [54.7458846596645, 55.97211196197037],
            [54.74386124738913, 55.99304928554053],
            [54.76064132521691, 56.043174407610834],
            [54.76758960755927, 56.001289031634265],
            [54.7458846596645, 55.97211196197037]
        ]
    },
    {
        name: 'Дальняя зона доставки',
        price: 850,
        color: '#0000ff55',
        coordinates: [
            [54.834445, 56.059437],
            [54.830878, 56.182347],
            [54.767207, 56.165181],
            [54.778521, 55.98631],
            [54.834445, 56.059437]
        ]
    }
];

let map; // Глобальная переменная для карты
let polygons = []; // Массив полигонов зон доставки
let placemark; // Метка на карте

ymaps.ready(init); // Инициализация карты после загрузки API

function init() {
    map = new ymaps.Map('map', {
        center: [54.735152, 55.958736],
        zoom: 12,
        controls: ['zoomControl']
    });

    map.behaviors.disable('dblClickZoom');

// Добавляем полигоны зон доставки на карту
    deliveryZones.forEach(zone => {
        const polygon = new ymaps.Polygon([zone.coordinates], {
            hintContent: `${zone.name} - ${zone.price} руб.`
        }, {
            fillColor: zone.color,
            strokeColor: '#000000',
            strokeWidth: 2,
            strokeStyle: 'solid',
            interactivityModel: 'default#silent'
        });
        polygons.push({zone: zone, polygon: polygon});
        map.geoObjects.add(polygon);
    });

// Обработка клика по карте
    map.events.add('click', function (e) {
        const coords = e.get('coords');
        updateFromCoordinates(coords);
    });

// Обработка ввода адреса
    const addressInput = document.getElementById('address');
    if (addressInput) {
        addressInput.addEventListener('change', function () {
            const searchQuery = this.value.trim();
            if (searchQuery) {
                geocodeAndUpdate(searchQuery);
            }
        });
    }
}

// Получение краткого адреса (улица + дом) из объекта геокодирования
function getShortAddress(geoObject, coords, callback) {
    const components = geoObject.properties.get("metaDataProperty.GeocoderMetaData.Address.Components");
    let street = "";
    let house = "";

    if (components && Array.isArray(components)) {
        components.forEach(function (comp) {
            if (comp.kind === "street") street = comp.name;
            else if (comp.kind === "house") house = comp.name;
        });
    }

    if (!street) {
        callback("Улица не найдена", coords); // Если улица не найдена
        return;
    }

    if (house) {
        callback(`${street}, ${house}`, coords); // Улица + дом
    } else {
        // Поиск ближайшего дома через обратное геокодирование
        ymaps.geocode(coords, {results: 1, kind: 'house', precision: 'house'}).then(function (res) {
            if (res.geoObjects.getLength() > 0) {
                const nearestHouse = res.geoObjects.get(0);
                const nearestCoords = nearestHouse.geometry.getCoordinates();
                const nearestComponents = nearestHouse.properties.get("metaDataProperty.GeocoderMetaData.Address.Components");
                let nearestHouseNumber = "";
                nearestComponents.forEach(function (comp) {
                    if (comp.kind === "house") nearestHouseNumber = comp.name;
                });

                if (nearestHouseNumber) {
                    callback(`${street}, ${nearestHouseNumber}`, nearestCoords);
                } else {
                    callback(street, coords); // Если номера дома нет, но улица есть, просто оставляем улицу
                }
            } else {
                ymaps.geocode(`Уфа, ${street}`, {results: 1, kind: 'house'}).then(function (res2) {
                    if (res2.geoObjects.getLength() > 0) {
                        const fallbackHouse = res2.geoObjects.get(0);
                        const fallbackCoords = fallbackHouse.geometry.getCoordinates();
                        const fallbackComponents = fallbackHouse.properties.get("metaDataProperty.GeocoderMetaData.Address.Components");
                        let fallbackHouseNumber = "";
                        fallbackComponents.forEach(function (comp) {
                            if (comp.kind === "house") fallbackHouseNumber = comp.name;
                        });

                        callback(fallbackHouseNumber ? `${street}, ${fallbackHouseNumber}` : street, fallbackCoords);
                    } else {
                        callback(street, coords); // Если не найден номер, оставляем только улицу
                    }
                }).catch(() => callback(street, coords));
            }
        }).catch(() => callback(street, coords));
    }
}

// Обновление метки на карте
function updatePlacemark(coords, address) {
    if (placemark) {
        placemark.geometry.setCoordinates(coords); // Перемещаем метку
        placemark.properties.set('iconContent', address); // Обновляем текст
    } else {
        placemark = new ymaps.Placemark(coords, {
            iconContent: address,
            hintContent: address
        }, {
            preset: 'islands#blueStretchyIcon'
        });
        placemark.events.add('click', function () {
            map.geoObjects.remove(placemark);
            placemark = null;
        });
        map.geoObjects.add(placemark);
    }
}

// Расчет стоимости доставки по координатам
function updateDeliveryPrice(coords) {
    let foundZone = null;
    for (const item of polygons) {
        if (item.polygon.geometry.contains(coords)) {
            foundZone = item.zone;
            break;
        }
    }

    const resultDiv = document.getElementById('result');
    const deliveryPriceEl = document.getElementById("delivery_price");
    const totalPriceEl = document.getElementById("total_price");
    const hiddenPriceInput = document.getElementById("DELIVERY_CUSTOM_PRICE"); // наш скрытый инпут
    const productsPriceText = document.getElementById("order_price")?.innerText || "0 ₽";
    const productsPrice = parseFloat(
        productsPriceText
            .replace(/\s/g, '')       // удаляем пробелы
            .replace(',', '.')        // заменяем запятую на точку
            .replace(/[^\d.]/g, '')    // оставляем только цифры и точку
    ) || 0;


    resultDiv.style.display = 'block';

    if (foundZone) {
        // Пользователь в зоне доставки
        const zonePrice = foundZone.price;
        resultDiv.className = 'success';
        resultDiv.innerHTML = `Доставка возможна! Стоимость: ${zonePrice} руб. (${foundZone.name})`;

        const totalPrice = productsPrice + zonePrice;
        if (deliveryPriceEl) deliveryPriceEl.innerText = `${zonePrice.toLocaleString('ru-RU')} ₽`;
        if (totalPriceEl) totalPriceEl.innerText = `${totalPrice.toLocaleString('ru-RU')} ₽`;

        // ВАЖНО: сохраним эту цену доставки в невидимом поле формы,
        // чтобы при сабмите она ушла в component.php
        if (hiddenPriceInput) hiddenPriceInput.value = zonePrice;

    } else {
        // За пределами зон
        resultDiv.className = 'error';
        resultDiv.innerHTML = 'К сожалению, доставка по этому адресу невозможна';
        if (deliveryPriceEl) deliveryPriceEl.innerText = "0 ₽";
        if (totalPriceEl) totalPriceEl.innerText = `${productsPrice.toLocaleString('ru-RU')} ₽`;

        // Если не доставляем, то 0
        if (hiddenPriceInput) hiddenPriceInput.value = 0;
    }
}

// «Обратное» геокодирование при клике
function updateFromCoordinates(coords) {
    ymaps.geocode(coords, {results: 1}).then(function (res) {
        if (res.geoObjects.getLength() === 0) return;

        const firstGeoObject = res.geoObjects.get(0);
        getShortAddress(firstGeoObject, coords, function (shortAddress, newCoords) {
            const addressInput = document.getElementById('address');
            if (addressInput) {
                addressInput.value = shortAddress;
            }

            updatePlacemark(newCoords, shortAddress);

            if (shortAddress === "Улица не найдена") {
                resetDeliveryInfo();
                return;
            }
            updateDeliveryPrice(newCoords);
            map.setCenter(newCoords, 14);
        });
    }).catch(error => {
        console.error('Ошибка обратного геокодирования:', error);
    });
}

// Сбрасываем информацию, если не нашли адрес
function resetDeliveryInfo() {
    const resultDiv = document.getElementById('result');
    const deliveryPriceEl = document.getElementById("delivery_price");
    const totalPriceEl = document.getElementById("total_price");
    const hiddenPriceInput = document.getElementById("DELIVERY_CUSTOM_PRICE");
    const productsPriceText = document.getElementById("order_price")?.innerText || "0 ₽";
    const productsPrice = parseFloat(
        productsPriceText
            .replace(/\s/g, '')       // удаляем пробелы
            .replace(',', '.')        // заменяем запятую на точку
            .replace(/[^\d.]/g, '')    // оставляем только цифры и точку
    ) || 0;


    resultDiv.style.display = 'block';
    resultDiv.className = 'error';
    resultDiv.innerHTML = 'Не удалось определить адрес. Уточните местоположение.';

    if (deliveryPriceEl) deliveryPriceEl.innerText = "—";
    if (totalPriceEl) totalPriceEl.innerText = `${productsPrice.toLocaleString('ru-RU')} ₽`;

    if (hiddenPriceInput) hiddenPriceInput.value = 0;
}

// Прямой геокодинг при вводе адреса в поле
function geocodeAndUpdate(searchQuery) {
    const resultDiv = document.getElementById('result');
    const addressInput = document.getElementById('address');

    if (!searchQuery.toLowerCase().includes('уфа')) {
        searchQuery = 'Уфа, ' + searchQuery;
    }

    ymaps.geocode(searchQuery, {
        results: 1,
        boundedBy: [[54.5, 55.5], [55.0, 56.5]],
        strictBounds: true
    }).then(function (res) {
        if (res.geoObjects.getLength() === 0) {
            resultDiv.style.display = 'block';
            resultDiv.className = 'error';
            resultDiv.innerHTML = 'Адрес не найден. Пожалуйста, уточните запрос';
            return;
        }
        const firstGeoObject = res.geoObjects.get(0);
        const coords = firstGeoObject.geometry.getCoordinates();
        getShortAddress(firstGeoObject, coords, function (shortAddress) {
            addressInput.value = shortAddress;
            updatePlacemark(coords, shortAddress);
            updateDeliveryPrice(coords);
            map.setCenter(coords, 14);
        });
    }).catch(function (error) {
        resultDiv.style.display = 'block';
        resultDiv.className = 'error';
        resultDiv.innerHTML = 'Ошибка при поиске адреса. Пожалуйста, уточните адрес.';
        console.error('Ошибка геокодирования:', error);
    });
}
// ===================== Работа с купонами =====================

// Функция загрузки списка купонов и отображения в контейнере с id "couponListContainer"
function loadCoupons() {
    fetch('/personal/order/make/ajax_delivery.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: new URLSearchParams({ 'action': 'list' })
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Создаем элемент для списка купонов
                const couponList = document.createElement('div');
                couponList.id = 'couponList';
                data.coupons.forEach(couponObj => {
                    const couponItem = document.createElement('div');
                    // Формируем строку с купоном и кнопкой удаления
                    couponItem.innerHTML = `${couponObj.COUPON} - Активен <button class="delete-coupon" data-coupon="${couponObj.COUPON}">Удалить</button>`;
                    couponList.appendChild(couponItem);
                });
                // Находим контейнер и обновляем его содержимое
                const container = document.getElementById('couponListContainer');
                if (container) {
                    container.innerHTML = '';
                    container.appendChild(couponList);
                }
            }
        })
        .catch(error => console.error("Ошибка при загрузке купонов:", error));
}

// Функция обновления цены на странице (сумма заказа + стоимость доставки)
function updatePrices(newOrderPrice) {
    const orderPriceEl = document.getElementById("order_price");
    if (orderPriceEl) {
        orderPriceEl.innerText = `${newOrderPrice.toLocaleString('ru-RU')} ₽`;
    }
    const deliveryPriceEl = document.getElementById("delivery_price");
    let deliveryPrice = 0;
    if (deliveryPriceEl) {
        deliveryPrice = parseFloat(
            deliveryPriceEl.innerText.replace(/\s/g, '').replace(',', '.').replace(/[^\d.]/g, '')
        ) || 0;
    }
    const totalPriceEl = document.getElementById("total_price");
    if (totalPriceEl) {
        totalPriceEl.innerText = `${(newOrderPrice + deliveryPrice).toLocaleString('ru-RU')} ₽`;
    }
}

// Функция применения купона
function applyCoupon(coupon) {
    // Отправляем AJAX-запрос с параметрами action=apply и переданным купоном
    fetch('/personal/order/make/ajax_delivery.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: new URLSearchParams({ 'action': 'apply', 'COUPON': coupon })
    })
        .then(response => response.json())
        .then(data => {
            const couponResultDiv = document.getElementById('couponResult');
            if (data.success) {
                // При успешном применении купона обновляем сообщение, сохраняем купон и обновляем цены
                couponResultDiv.style.color = 'green';
                couponResultDiv.innerText = data.message;
                document.getElementById('COUPON_HIDDEN').value = coupon;
                updatePrices(data.new_total_price);
                loadCoupons();
            } else {
                // Если произошла ошибка, выводим сообщение об ошибке
                couponResultDiv.style.color = 'red';
                couponResultDiv.innerText = "Ошибка: " + data.message;
            }
        })
        .catch(error => {
            console.error("Ошибка AJAX при применении купона:", error);
            const couponResultDiv = document.getElementById('couponResult');
            couponResultDiv.style.color = 'red';
            couponResultDiv.innerText = "Ошибка запроса";
        });
}

// Обработчик клика по кнопке "Применить купон"
document.addEventListener("click", function (event) {
    if (event.target && event.target.id === "applyCouponBtn") {
        event.preventDefault();
        const couponInput = document.getElementById("COUPON");
        const coupon = couponInput.value.trim();
        if (!coupon) {
            console.error("Купон не введён");
            return;
        }
        applyCoupon(coupon);
    }
});

// Функция удаления купона
function deleteCoupon(coupon) {
    fetch('/personal/order/make/ajax_delivery.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: new URLSearchParams({ 'action': 'delete', 'COUPON': coupon })
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                updatePrices(data.new_total_price);
                loadCoupons();
            } else {
                console.log("Ошибка при удалении промокода: " + data.message);
            }
        })
        .catch(error => console.error("Ошибка AJAX при удалении промокода:", error));
}

// Делегирование для кнопок удаления купона
document.addEventListener("click", function(event) {
    if (event.target && event.target.classList.contains("delete-coupon")) {
        event.preventDefault();
        const coupon = event.target.getAttribute("data-coupon");
        deleteCoupon(coupon);
    }
});

// При загрузке страницы сразу подгружаем список купонов
document.addEventListener("DOMContentLoaded", function() {
    loadCoupons();
});