# Ghidaq Luxury Jewelry
Ghidaq Luxury Jewelry is a PHP Laravel eCommerce project that provides an online jewelry store with various features. The project includes user authentication for login and registration, a secure checkout process, support for promo codes to offer discounts, and detailed invoices with comprehensive order information. Users can also access their order history to view their past purchases. The project utilizes a MySQL database to store and manage the data. This project aims to create a smooth and enjoyable shopping experience for customers in the world of luxury jewelry.


## ⚠️ **Important: Database Seeding Instructions** ⚠️

To ensure the project functions correctly, it's important to populate the database with initial data, including items and promo codes. Before running the following commands, please make sure you have a working database connection configured.

1. Run the following command to seed the database with items:

**php artisan db:seed --class=ItemSeeder**

2. Run the following command to seed the database with promo codes:

**php artisan db:seed --class=PromoSeeder**

These commands will populate the database with sample items and promo codes, allowing you to test and explore the project's features.

Feel free to modify the seeders or add more data as needed.

Thank you for using Ghidaq Luxury Jewelry!
