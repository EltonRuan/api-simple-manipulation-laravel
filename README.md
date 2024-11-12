# Simple Login API Project with Laravel 🚀

This project is an API developed for a simple login system, designed as a learning tool and foundation for future features. The API was built in Laravel and allows for user registration, login, and logout validation, as well as access to routes protected by Bearer token authorization.

## Technologies and Tools Used 🛠️

- PHP
- MySQL
- Laravel
- Git
- Visual Studio Code
- Postman
- MySQL Workbench
- XAMPP (or Apache)

## Important Notes ⚠️

Before starting, make sure all required technologies and tools are installed.

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/repository.git
   ```

2. Enter the project directory (recommended to be on a local server, such as XAMPP):
   ```bash
   cd repository
   ```

3. Install or update Laravel dependencies:
   ```bash
   composer install
   # or
   composer update
   ```

4. Update the `.env` file with your database details:
   ```plaintext
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=database_name
   DB_USERNAME=root
   DB_PASSWORD=your_password
   ```

5. Generate the application key:
   ```bash
   php artisan key:generate
   ```

6. Create the database structure:
   ```bash
   php artisan migrate
   ```

7. Start the development server:
   ```bash
   php artisan serve
   ```

## Functionality, Routes, and Methods 📌

> **Note**: This project does not have a graphical interface. All interactions should be done directly in Postman. Add the following headers to all requests:

- `Accept`: `application/json`
- `Content-Type`: `application/json`

### Routes and Usage Examples 🚦

#### User Registration

- **URL**: `http://127.0.0.1:8000/api/users/register`
- **Method**: `POST`
- **Body** (JSON):
  ```json
  {
    "name": "Elton Ruan",
    "email": "eltonruan@example.com",
    "password": "123456",
    "password_confirmation": "123456"
  }
  ```
- **Example Response**:
  ```json
  {
    "user": {
        "name": "Elton Ruan",
        "email": "eltonruan@example.com",
        "updated_at": "2024-11-08T14:53:13.000000Z",
        "created_at": "2024-11-08T14:53:13.000000Z",
        "id": 1
    },
    "token": "1|xamzmD3OKP2qv9MaYbCkANCIMtlSBvZw7iMd72mm65ee8629"
  }
  ```

#### User Login 

- **URL**: `http://127.0.0.1:8000/api/users/login`
- **Method**: `POST`
- **Headers**: `Authorization: Bearer [generated_token]`
- **Body** (JSON):
  ```json
  {
    "email": "eltonruan@example.com",
    "password": "123456"
  }
  ```
- **Example Response**:
  ```json
  {
    "token": "4|oMEgkuqUUoZWoECNZYAhEXqMc8T42zK24OcVSx3Dce4217e3",
    "message": "User authenticated successfully!"
  }
  ```

#### User Logout 

- **URL**: `http://127.0.0.1:8000/api/users/logout`
- **Method**: `POST`
- **Headers**: `Authorization: Bearer [generated_token]`
- **Example Response**:
  ```json
  {
    "message": "Logout successful"
  }
  ```

#### Protected Route 

- **URL**: `http://127.0.0.1:8000/api/protected-resource`
- **Method**: `GET`
- **Headers**: `Authorization: Bearer [generated_token]`
- **Example Response**:
  ```json
  {
    "message": "This is a protected route",
    "user": {
        "id": 1,
        "name": "Elton Ruan",
        "email": "eltonruan@example.com",
        "created_at": "2024-11-08T14:53:13.000000Z",
        "updated_at": "2024-11-08T16:47:16.000000Z"
    }
  }
  ```

## Final Considerations

I’m happy to provide this project here, and I hope it helps those on a similar journey. Enjoy it! For any questions, I’ll be eager to help! 😊

**All rights to this project are owned by me.**
