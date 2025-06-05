
<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

# 🧾 Promotions Web App

This is a web application for managing and publishing **discount coupons and promotions** from various companies.  
Users can browse, and companies can submit promotional content, while platform staff manage and validate entries.

Built with the **Laravel** PHP framework, the app ensures scalability, security, and a user-friendly experience.

---

## 🎯 Project Overview

The main objective of this platform is to serve as a **coupon management system**, where:
- Companies can **register and submit promotions**.
- Customers can **view and redeem** those promotions.
- Staff members oversee content and **moderate submissions**.

The application includes a complete **authentication system** with dynamic rendering of content based on the user's role:
- 👤 Clients: Can view and redeem coupons, but **cannot edit** them.
- 🏢 Companies: Can create and submit coupons.
- 🛡️ Staff: Have full control (approve, edit, delete).

---

## 🚀 Features

### 🔐 User Authentication & Roles
- Register/Login system with session-based access
- Role-specific interfaces (Client / Company / Staff)

### 🧾 Promotion Management
- Companies can submit promotions with title, description, and images
- Admins/staff can **approve**, **edit**, or **delete** promotions
- Customers can **view** and **redeem** coupons

### 📱 Responsive UI
- Designed to work seamlessly across desktop, tablet, and mobile

### ⚙️ Technologies Used
- Laravel (Backend Framework)
- Blade (Templating Engine)
- HTML, CSS, JavaScript (Frontend)
- MySQL (Database)

---

## 🛠️ Installation

### 1. Clone the Repository
```bash
git clone https://github.com/yourusername/your-repo-name.git
cd your-repo-name
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Set Up Environment
```bash
cp .env.example .env
php artisan key:generate
```
Update your `.env` file with your local database and mail credentials.

### 4. Run Migrations
```bash
php artisan migrate
```

### 5. Start the Server
```bash
php artisan serve
npm run dev
```

Then open [http://127.0.0.1:8000](http://127.0.0.1:8000) in your browser.

---

## 🧪 Usage Instructions

1. **Register or Login**
   - Users can sign up as company, staff, or customer.

2. **Submit a Promotion (Companies Only)**
   - Enter promotion details including title, description, and image.

3. **Moderation (Staff Only)**
   - Approve, reject, or edit any submitted promotions.

4. **Browse & Redeem (Customers)**
   - View active coupons and follow redemption instructions.

---

## 🧰 Laravel Highlights

This project leverages the power of Laravel for:

- 🔁 Fast, intuitive routing
- 💉 Dependency injection for clean code structure
- 💾 ORM and schema migrations
- ⚙️ Middleware for role-based access control
- 📬 Blade for clean frontend templating
- 📡 Built-in tools for session and authentication handling

For more details, visit the [Laravel Documentation](https://laravel.com/docs).

---

## 📜 License

This application is open-source software licensed under the [MIT License](https://opensource.org/licenses/MIT).

