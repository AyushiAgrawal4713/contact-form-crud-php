# Contact Form CRUD Application

This is a simple Contact Form application built using HTML, CSS, JavaScript, PHP, and MySQL.

## Features
- Contact form submission
- Create, Read, Update, Delete (CRUD) operations
- PHP backend with MySQL database
- Basic frontend validation using JavaScript

## Tech Stack
- HTML
- CSS
- JavaScript
- PHP
- MySQL
- XAMPP (Local Server)

## Database Setup
Database Name: contact_app

Table:
```sql
CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    message TEXT
);
