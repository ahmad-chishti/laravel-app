# Laravel App
Laravel 5.2 Sample App with basic CRUD implementation and authentication.


1) Copy ".env.example" as ".env" in the root directory.

2) Run the command "php artisan key:generate" to generate a unique application key for your Laravel Application.

3) Create a new database and alter .evn file with new database details.
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE={your-database-name}
        DB_USERNAME={your-db-user-name}
        DB_PASSWORD={your-db-password}

4) Run the command "php artisan migrate" to create the required tables in the database.

5) Access the app in the browser and have fun learning laravel.


PS. You need to navigate to you project root directory in command prompt to run "artisan" commands.