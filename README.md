# 🎓 Student Management System - Laravel 10

A modern web application built with **Laravel 10** to manage student records efficiently. This system includes student registration, list views, data editing, and exporting reports to PDF using **Barryvdh's Laravel DomPDF**.

---

## 🚀 Features

- ✅ Add, edit, delete student records
- 📋 List all students with pagination
- 📄 Export student details to PDF
- 🧾 Validation & flash messaging
- 🎨 Responsive UI with Blade & Bootstrap

---

## 🛠️ Tech Stack

| Tech | Description |
|------|-------------|
| ⚙️ Laravel 10 | PHP Framework (MVC) |
| 💾 MySQL | Database |
| 📄 DomPDF | PDF generation |
| 🎨 Bootstrap | UI Framework |
| 🌐 Blade | Templating engine |

---

# Clone the repository
git clone [https://github.com/prachit082/Student-Management.git](https://github.com/notramm/Student-Management-Project.git)

# Install dependencies
composer install

# Set up environment
cp .env.example .env
php artisan key:generate

# Configure your database in .env
# Then run migrations
php artisan migrate

# (Optional) Seed the database
php artisan db:seed

# Start the development server
php artisan serve
