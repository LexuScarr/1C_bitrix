# 1C_Bitrix Project Repository

Этот репозиторий содержит различные компоненты и проекты, которые я разрабатывал для системы управления контентом 1С-Битрикс. Эти проекты демонстрируют мой опыт в разработке и интеграции различных функциональных возможностей на платформе 1С-Битрикс.

## Описание

В этом репозитории собраны проекты, включающие:

- Кастомные компоненты для 1С-Битрикс
- Верстку страниц и шаблоны
- Интеграции с внешними сервисами
- Примеры использования стандартных и нестандартных компонентов

## Структура репозитория

- **components**: Кастомные компоненты для 1С-Битрикс
  - [`news.detail`](components/news.detail/): Компоненты для отображения детальной информации новостей
  - [`catalog`](components/catalog/): Компоненты для работы с каталогом продукции
- **templates**: Шаблоны для различных страниц и проектов
  - [`mlt`](templates/mlt/): Полноценный проект с версткой и шаблоном сайта с компонентами, в котором находится шаблон сайта [`temp_oil`](templates/mlt/temp_oil/)
- **api**: Интеграции с внешними сервисами и API
  - [`ajax`](api/ajax/): Компоненты для обработки AJAX-запросов
  - [`includes`](api/includes/): Вспомогательные файлы и библиотеки
- **pages**: Страницы сайта
  - [`personal`](pages/personal/): Страницы для личного кабинета пользователя
  - [`postavshchiki`](pages/postavshchiki/): Страницы для работы с поставщиками, используя API Битрикса

## Примеры проектов

### [`mlt`](templates/mlt/) Шаблон сайта с кастомными компонентами

- **Описание**: Шаблон сайта, включающий кастомные компоненты для каталога продукции и новостной ленты.
- **Используемые технологии**: PHP, JavaScript, HTML, CSS, AJAX

### [`personal`](pages/personal/) Личный кабинет пользователя 

- **Описание**: Разработка личного кабинета пользователя с возможностью редактирования профиля, просмотра заказов и взаимодействия с поддержкой.
- **Используемые технологии**: PHP, AJAX, Bitrix API
