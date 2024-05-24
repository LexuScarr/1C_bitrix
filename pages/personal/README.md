# 1C_Bitrix Project

## Содержание

- `components` - Компоненты, которые были использованы.
- `personal` - Верстка страниц.

### Компоненты

- [`main.profile`](components/main.profile/)
- [`sale.personal.order`](components/sale.personal.orde/)
- [`sale.personal.order.list`](components/sale.personal.order.list/)
- [`sale.personal.profile.detail`](components/sale.personal.profile.detail/)
- [`sale.personal.profile.list`](components/sale.personal.profile.list/)

#### Страницы личного кабинета

1. **index.php**
    - **Компонент**: `bitrix:main.profile`
    - **Описание**: На главной странице личного кабинета используется компонент `bitrix:main.profile`, который позволяет пользователю редактировать свои личные данные.

2. **orders.php**
    - **Компонент**: `bitrix:sale.personal.order`
    - **Описание**: На странице заказов используется компонент `bitrix:sale.personal.order`, который выводит информацию о заказах пользователя с разными статусами.

3. **pers_company.php**
    - **Компонент**: `bitrix:sale.personal.profile`
    - **Описание**: На странице профилей компаний используется компонент `bitrix:sale.personal.profile`, который выводит компании пользователя (в Битриксе это профили покупателя).
