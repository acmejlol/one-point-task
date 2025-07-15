Employee Management System

This is a web application built with **Symfony 6.3**, **PHP 8.2**, **MySQL 8**. 
It allows users to manage employee records, including CRUD operations and department assignments.

---

Features

- Add, edit, delete, and list employees
- Assign employees to departments (with FK)
- Form validation using Symfony Validator
- MySQL integration
- Fixtures to populate departments

---

Tech Stack & Versions

| Tool               | Version         |
|--------------------|-----------------|
| PHP                | 8.2             |
| Symfony            | 6.3             |
| Composer           | 2.6             |
| MySQL              | 8.0+            |
| Doctrine ORM       | 2.17            |
| Symfony CLI        | 5.5 (optional)  |
| Node.js (for UX)   | 18+ (optional)  |

---

Setup Instructions
---
Clone the Repository

git clone https://github.com/YOUR_USERNAME/employee-management.git
cd employee-management
---
composer install
---
Create your local environment config:
cp .env .env.local
Then edit .env.local and update the DATABASE_URL to your MySQL setup:
DATABASE_URL="mysql://root:password@127.0.0.1:3306/employee_db?serverVersion=8.0&charset=utf8mb4"
Replace root with your DB username, password with your DB password, employee_db with your DB name
---
Create & Migrate the Database
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
---
Load Sample Departments:
php bin/console doctrine:fixtures:load
---
Start the Symfony Server
symfony server:start
Or if you don’t have the Symfony CLI:
php -S localhost:8000 -t public
---
Then go to: http://localhost:8000\employee


