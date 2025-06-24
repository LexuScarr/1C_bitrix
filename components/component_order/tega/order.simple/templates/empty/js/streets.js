// Загрузка и обработка списка улиц для автодополнения
let streets = [];
let streetTypes = {};

fetch('streets_optimized.json')
    .then(response => response.json())
    .then(data => {
        streetTypes = data.types;
        streets = data.streets.map(([type, name]) => `${streetTypes[type]} ${name}`.trim());
    })
    .catch(error => console.error('Ошибка загрузки данных улиц:', error));

const addressInput = document.getElementById('address');
const suggestionsContainer = document.getElementById('suggestions');

// Функция фильтрации улиц по запросу
function filterStreets(query) {
    query = query.toLowerCase().trim();
    return streets.filter(street => street.toLowerCase().includes(query)).slice(0, 5);
}
// Отображение подсказок
function showSuggestions(suggestions) {
    suggestionsContainer.innerHTML = '';
    if (suggestions.length > 0) {
        suggestionsContainer.style.display = 'block';
        suggestions.forEach(street => {
            const div = document.createElement('div');
            div.className = 'suggestion-item';
            div.textContent = street;
            div.onclick = () => {
                addressInput.value = street; // Устанавливаем выбранный адрес
                suggestionsContainer.style.display = 'none';
                triggerDeliveryUpdate(street); // Пересчитываем доставку
            };
            suggestionsContainer.appendChild(div);
        });
    } else {
        suggestionsContainer.style.display = 'none';
    }
}

addressInput.addEventListener('input', (e) => {
    const query = e.target.value.trim();
    if (query.length >= 2) {
        showSuggestions(filterStreets(query));
    } else {
        suggestionsContainer.style.display = 'none';
    }
});

document.addEventListener('click', (e) => {
    if (!addressInput.contains(e.target) && !suggestionsContainer.contains(e.target)) {
        suggestionsContainer.style.display = 'none';
    }
});