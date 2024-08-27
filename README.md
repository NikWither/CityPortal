Реализовано
1. Регистрация
2. Авторизация (всё с валидацией, как на сервере, так и со стороны клиента), при этом используются сессии
3. Админ-панель для управления контентом приложения
4. CRUD взаимодействие
5. Верстка сделана на bootstrap
6. Поиск, реализованный на бекенде (через оператор like в SQL)
Главная страница выглядит следующим образом, не авторизированному пользователю можно только просматривать все посты
![image](https://github.com/user-attachments/assets/6c885875-0192-4eb0-a62c-ffceecab7a88)


Страница авторизации
![image](https://github.com/user-attachments/assets/8a6c7444-5909-403e-8f8b-eb2ac7e05028)

Страница авторизированного пользователя

![image](https://github.com/user-attachments/assets/b0902ced-393e-43ee-8197-eb5eecd44d38)

Страница заявок пользователя (с возможностью удаления)

![image](https://github.com/user-attachments/assets/b0d60018-c969-4a8c-aa27-9158d0869ac9)

Страница добавления заявок (каждой заявке присваивается статус "создано", редактировать статус может только админ)

![image](https://github.com/user-attachments/assets/120447b8-497f-4c7e-928b-998250f34f59)

Главная страница администратора сайта, добавляется вкладка "Управление заявками"

![image](https://github.com/user-attachments/assets/9fe8e3c3-a617-4cc3-b983-842c98537d3e)

Сама страница "Управление заявками". Админ может менять их статус, для демонстрации я поменял статус заявки на "В процессе"

![image](https://github.com/user-attachments/assets/925b1ccb-9854-401d-952e-f627d0b89155)

В качестве БД использовал MySQL
![image](https://github.com/user-attachments/assets/056e1d1d-b88f-4d47-8dd1-b1663f94b4d6)
Таблица users - зарегистрированные пользователи, таблица tickets - заявки пользователей, таблица user_group - уровень доступа (админ или простой пользователь), таблица tickets_group - статусы заявок (создано, в процессе, отклонено, выполнено).

