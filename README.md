Instructions 

Laravel Test Submission
This project demonstrates the implementation of the following tasks in Laravel 11:

1) Create a command to clear old logs older than 7 days.
2) Implement a middleware to restrict access between 10 PM and 6 AM.
3) Fetch and display all products with their category names in a single query using Eloquent.

Install Dependencies
composer install

Set Up Environment
1) Copy .env.example to .env
2) Update database credentials in .env:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=product_management
    DB_USERNAME=root
    DB_PASSWORD=

3) Run Migrations & Seeders
   php artisan migrate --seed


Implemented Features & How to Test

1. Clear Old Logs Command
Command: php artisan logs:clear
Functionality: Deletes log files in storage/logs/ that are older than 7 days.
Implementation: Located in app/Console/Commands/ClearOldLogs.php
Logs: Check deleted files in storage/logs/laravel.log

To Test run command:-
php artisan logs:clear
Then check logs:
tail -f storage/logs/laravel.log

2. Middleware to Restrict Access (10 PM - 6 AM)
Middleware Name: RestrictTimeAccess
Functionality: Blocks access to routes between 10 PM and 6 AM.
Implementation: Located in app/Http/Middleware/RestrictTimeAccess.php
Registered in: bootstrap/app.php (for Laravel 11)

3. Fetch and Display Products with Categories
Eloquent Query: Fetches all products along with their category names.
Implementation: In app/Http/Controllers/ProductController.php
Route: GET /products

To test run:- 
1) php artisan serve
Visit:
http://localhost:8000/products
This will show all products with their category names.
