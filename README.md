# Laravel Filter Functionality Example

This project demonstrates how to implement filter functionality in Laravel, allowing the frontend to consume filtered data based on specific criteria. In this example, we filter a list of products by category and price range.

## Requirements

- PHP >= 7.4
- Composer
- Laravel >= 8.x
- MySQL or any other database supported by Laravel

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/sosmongare/laravel-filter-example.git
    ```

2. Navigate to the project directory:

    ```bash
    cd laravel-filter-example
    ```

3. Install dependencies:

    ```bash
    composer install
    ```

4. Copy the `.env.example` file to `.env`:

    ```bash
    cp .env.example .env
    ```

5. Generate an application key:

    ```bash
    php artisan key:generate
    ```

6. Configure your database settings in the `.env` file.

7. Run the migrations to create the database tables:

    ```bash
    php artisan migrate
    ```

8. Seed the database with sample data:

    ```bash
    php artisan db:seed --class=ProductSeeder
    ```

## Usage

1. Start the Laravel development server:

    ```bash
    php artisan serve
    ```

2. Access the filter functionality through the following endpoints:

    - Get all products: `http://127.0.0.1:8000/api/products`
    - Filter by category: `http://127.0.0.1:8000/api/products?category=Electronics`
    - Filter by price range: `http://127.0.0.1:8000/api/products?min_price=50&max_price=150`
    - Combine filters: `http://127.0.0.1:8000/api/products?category=Electronics&min_price=50&max_price=150`

## Project Structure

- `app/Models/Product.php`: The Product model.
- `app/Http/Controllers/ProductController.php`: The controller handling the filter logic.
- `database/migrations/YYYY_MM_DD_create_products_table.php`: Migration file for the products table.
- `database/seeders/ProductSeeder.php`: Seeder file for populating the products table with sample data.
- `routes/api.php`: Routes for accessing the filter functionality.

## Contributing

Contributions are welcome! Please open an issue or submit a pull request for any changes.
