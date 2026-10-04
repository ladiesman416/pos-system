# POS System: Foundations

A four-page website built with CodeIgniter 4. It is the first version of a Point-of-Sale (POS) system,
made for IT0049 (Web System Technologies), TFA 1: From Zero to Four Pages.

There is no database yet. The Customers and Users pages show records from static PHP arrays.

## Pages

| URL          | What it shows                              |
|--------------|--------------------------------------------|
| `/`          | Landing page                               |
| `/about`     | About page                                 |
| `/customers` | Customer Accounts (name, email, phone)     |
| `/users`     | User Accounts (username, name, role)       |

## What You Need

- PHP 8.1 or higher
- Composer

## How to Set Up

1. Download or clone this repository:
```
   git clone https://github.com/ladiesman416/pos-system.git
   cd pos-system
```
2. Install the dependencies:
```
   composer install
```
3. Copy the file named `env` and rename the copy to `.env`.
4. Open `.env` and remove the `#` in front of these two lines, then set them like this:
```
   CI_ENVIRONMENT = development
   app.baseURL = 'http://localhost:8080/'
```

## How to Run

```
php spark serve
```

Open the address shown in the terminal in your browser (usually `http://localhost:8080`).
If that port is busy, the server uses another one, such as 8081. Change `app.baseURL` in `.env` to match.

## Main Files

- `app/Config/Routes.php`: the routes for the four pages
- `app/Controllers/Pages.php`: landing and about pages
- `app/Controllers/Customers.php`: customer list (static array)
- `app/Controllers/Users.php`: user list (static array)
- `app/Views/layout.php`: shared layout with the navigation bar
- `app/Views/pages/`, `app/Views/customers/`, `app/Views/users/`: the page views

## Links

- Live site: <your hosted link>
- Repository: https://github.com/ladiesman416/pos-system

## Setup

   Requirements: PHP, MySQL or MariaDB (XAMPP works), Composer.

   1. Clone this repository.
   2. Create a database named `pos_system` in phpMyAdmin, then use the **Import** tab to import `database/pos_system.sql`.
   3. Copy `env` to `.env` and set the `database.default.*` values to match your MySQL credentials.
   4. Run `php spark serve` and open the URL shown in the terminal.

## TFA3 Features
- Add/edit customers and users with validation
- Avatar upload (JPG/PNG, max 2MB) with 150x150 thumbnail

## Setup
1. Import database/pos_system.sql in phpMyAdmin
2. Copy env to .env and set the database credentials
3. Make sure public/uploads/avatars is writable
4. Run: php spark serve

## Author

- Name: Kyle Rianne Andrei D. Dionio
- Section: TC33
- Professor: Von Erick Magbitang