# Laravel Test Submission

This project demonstrates the implementation of key Laravel 11 tasks, including:

1. A command to clear logs older than 7 days.
2. Middleware to restrict access between 10 PM and 6 AM.
3. Fetching and displaying all products with their category names in a single query using Eloquent.

---

## Setup Instructions

### 1. Clone and Switch to Master Branch
```sh
 git checkout master
```

### 2. Install Dependencies
```sh
 composer install
```

### 3. Set Up Environment
1. Copy `.env.example` to `.env`:
   ```sh
   cp .env.example .env
   ```
2. Update database credentials in `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=product_management
   DB_USERNAME=root
   DB_PASSWORD=
   ```

### 4. Run Migrations & Seeders
```sh
 php artisan migrate --seed
```

---

## Implemented Features & Testing

### 1. Clear Old Logs Command
- **Command:** `php artisan logs:clear`
- **Functionality:** Deletes log files in `storage/logs/` that are older than 7 days.
- **Implementation:** Located in `app/Console/Commands/ClearOldLogs.php`
- **Logs Check:** Verify deleted files in `storage/logs/laravel.log`

**To Test:**
```sh
php artisan logs:clear
```
Then check logs:
```sh
tail -f storage/logs/laravel.log
```

---

### 2. Middleware to Restrict Access (10 PM - 6 AM)
- **Middleware Name:** `RestrictTimeAccess`
- **Functionality:** Blocks access to routes between 10 PM and 6 AM.
- **Implementation:** Located in `app/Http/Middleware/RestrictTimeAccess.php`
- **Registered In:** `bootstrap/app.php` (For Laravel 11)

---

### 3. Fetch and Display Products with Categories
- **Functionality:** Fetches all products along with their category names using Eloquent.
- **Implementation:** Found in `app/Http/Controllers/ProductController.php`
- **Route:** `GET /products`

**To Test:**
1. Start the Laravel development server:
   ```sh
   php artisan serve
   ```
2. Open the following URL in a browser:
   ```
   http://localhost:8000/products
   ```
   This should display all products along with their respective category names.
---


