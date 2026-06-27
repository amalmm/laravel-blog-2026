# Laravel Blog Project with Tailwind CSS

A modern, responsive blogging platform built using Laravel and styled with Tailwind CSS. 

## 🚀 Features

* **Authentication:** Secure user registration, login, and password reset.
* **CRUD Operations:** Create, read, update, and delete blog posts.
* **Category Management:** Organize posts by different topics.
* **Responsive Design:** Fully optimized for mobile, tablet, and desktop screens.
* **Rich Text Editor:** Clean interface for writing and formatting content.
* **Pagination:** Smooth navigation across multiple post pages.

## 🛠️ Tech Stack

* **Backend:** Laravel 13.8
* **Frontend:** Tailwind CSS, Blade Templates
* **Database:** MySQL / SQLite
* **Asset Bundler:** Vite

## 📋 Prerequisites

Ensure you have the following installed on your local machine:

* PHP >= 8.3
* Composer
* Node.js & NPM
* Database server MySQL

## 🔧 Installation & Setup

Follow these steps to get the project running locally:

### 1. Clone the Repository
```bash
git clone https://github.com/amalmm/laravel-blog-2026.git
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Install Frontend Dependencies
```bash
npm install
```

### 4. Environment Configuration
Copy the example environment file and generate the application key:
```bash
cp .env.example .env
php artisan key:generate
```

### 5. Configure the Database
Open your `.env` file and update your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

### 6. Run Database Migrations 
Create the tables and seed them with initial data if available:
```bash
php artisan migrate
```
### 7. Link Storage (Optional)
If your blog features image uploads, link the storage directory:
```bash
php artisan storage:link
```

### 8. Start the Application
Run the local development server and build the assets:

**Terminal 1 (Laravel Server):**
```bash
php artisan serve
```

**Terminal 2 (Vite Server for Tailwind):**
```bash
npm run dev
```
Visit `http://127.0.0.1:8000` in your browser to view the blog.

### 9. seed data
run terminal command for demo data 
```bash
php artisn db:seed 
```
