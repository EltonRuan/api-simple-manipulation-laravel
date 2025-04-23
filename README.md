<div align='center'>
 <img style="width:100%" src="https://capsule-render.vercel.app/api?type=soft&height=200&color=FFFFFF&text=Simple%20Login%20API%20Project%20with%20Laravel&fontSize=40&fontAlign=50&strokeWidth=0&descAlignY=80&stroke=000000">
</div>

<nav align="center">
  <h2>🔗 NAVIGATION</h2>
  <p>
    <a href="#about-laravel">ABOUT LARAVEL</a> |
    <a href="#about-this-project">ABOUT THIS PROJECT</a> |
    <a href="#technologies-and-tools-used-️">TECHNOLOGIES AND TOOLS USED</a> |
    <a href="#installation">INSTALLATION</a> |
    <a href="#functionality-routes-and-methods">FUNCTIONALITY, ROUTES AND METHODS</a> |
    <a href="#final-considerations">FINAL CONSIDERATIONS</a>
  </p>
</nav>

## ABOUT LARAVEL
Laravel is a modern, elegant PHP framework built to simplify the process of developing robust web applications. It follows the Model-View-Controller (MVC) architectural pattern and emphasizes clean, readable syntax and developer productivity.

Laravel comes with powerful built-in tools such as routing, middleware, authentication, caching, and database management. With its expressive syntax and extensive ecosystem—including tools like Laravel Sanctum, Laravel Jetstream, and Eloquent ORM—it allows developers to rapidly build scalable, secure, and maintainable applications.

Whether you're developing APIs, full-stack apps, or microservices, Laravel offers a solid foundation and a great developer experience.

<img src="https://skillicons.dev/icons?i=laravel,&perline=20" />

## ABOUT THIS PROJECT

This project is a **Simple Login API** built with **Laravel**, designed to serve as a foundational structure for user authentication in web or mobile applications. Its primary goal is to demonstrate how to implement secure authentication using modern Laravel features such as API routes, Bearer token authorization, and request validation.

The API includes the following essential functionalities:

<ul>
  <li><strong>User registration</strong> with input validation</li>
  <li><strong>Secure login</strong> with token generation via Laravel Sanctum</li>
  <li><strong>Logout</strong> functionality that revokes tokens</li>
  <li><strong>Protected routes</strong> that require valid authentication tokens to access</li>
</ul>

This project is ideal for:

<ul>
  <li>Beginners looking to understand Laravel’s approach to API development</li>
  <li>Developers needing a clean and simple starting point to build more complex authentication systems</li>
</ul>

The codebase is:

<ul>
  <li>Clean</li>
  <li>Modular</li>
  <li>Easy to extend</li>
</ul>

It serves as a great learning resource or boilerplate for real-world projects.

## <h2 id="">TECHNOLOGIES AND TOOLS USED </h2>

- PHP
- MySQL
- Laravel
- Git
- Visual Studio Code
- Postman
- MySQL Workbench
- XAMPP (or Apache)

## Important Notes

Before starting, make sure all required technologies and tools are installed.

## <h2 id="installation">INSTALLATION</h2>
1. Clone the repository:
   ```bash
   git clone https://github.com/EltonRuan/api-simple-manipulation-laravel
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

<h2 id="functionality-routes-and-methods">FUNCTIONALITY, ROUTES, AND METHODS</h2>


> **Note**: This project does not have a graphical interface. All interactions should be done directly in Postman. Add the following headers to all requests:

- `Accept`: `application/json`
- `Content-Type`: `application/json`

### Routes and Usage Examples 

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

## FINAL CONSIDERATIONS
<p>This Laravel project was created to demonstrate secure user authentication using Laravel's modern features, such as API routes and Bearer token authorization.</p>
<p>The goal was to implement essential authentication functionalities, ensuring clean, maintainable code while following best development practices.</p>
<p>Feel free to explore and expand this project as a starting point for your own applications. It serves as a solid foundation for learning and building more complex authentication systems.</p>
<p>Keep experimenting and building — that’s how great developers grow!</p>
<br><br>
<p><strong>© 2025 EltonRuan. All rights reserved.</strong></p>

<footer align="center">
 <img style="width:100%" src="https://capsule-render.vercel.app/api?type=soft&height=20&color=FFFFFF&fontSize=50&fontAlign=50&strokeWidth=0&descAlignY=80&stroke=000000&reversal=false&section=footer">
</footer>
