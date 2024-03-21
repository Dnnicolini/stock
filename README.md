

## Laravel Inventory Management System with Sail Docker

**Description:**

This project is a Laravel-based inventory management system that uses Sail Docker for local development. It allows users to manage products, categories, and suppliers, as well as track inventory levels and generate reports.

**Features:**

* Product management: Add, edit, and delete products.
* Category management: Add, edit, and delete categories.
* Supplier management: Add, edit, and delete suppliers.
* Inventory tracking: Track inventory levels for each product.
* Reporting: Generate reports on product sales, inventory levels, and more.

**Requirements:**

* Docker
* Docker Compose
* Laravel

**Getting Started:**

1. Clone the project repository:

```
git clone https://github.com/bard-code/laravel-inventory-management.git
```

2. Install Docker and Docker Compose.

3. Navigate to the project directory and run the following command to start the Sail environment:

```
docker-compose up -d
```

4. Open a web browser and navigate to `http://localhost:8000` to access the application.

5. Create a database and configure the Laravel application:

```
php artisan migrate
php artisan key:generate
```

6. Create an admin user:

```
php artisan tinker
User::create([
  'name' => 'Admin',
  'email' => 'admin@example.com',
  'password' => bcrypt('password'),
  'role' => 'admin',
]);
```

7. You can now start using the application!


**License:**

This project is licensed under the MIT License.
