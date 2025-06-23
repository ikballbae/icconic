# 🚀 ICCONIC
### 💼 Point of Sales with Laravel 10

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-10-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.0+-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

**✨ Modern • Powerful • Elegant ✨**

*Revolutionizing retail with cutting-edge point of sales technology*

[🌟 Features](#-features) • [🚀 Quick Start](#-quick-start) • [📚 Documentation](#-documentation) • [🤝 Contributing](#-contributing)

---

</div>

## 🎯 About ICCONIC

ICCONIC adalah sistem Point of Sales (POS) modern yang dibangun dengan Laravel 10, dirancang khusus untuk memenuhi kebutuhan bisnis retail masa kini. Dengan antarmuka yang intuitif dan fitur-fitur canggih, ICCONIC membantu Anda mengelola bisnis dengan lebih efisien.

### 🌟 Why Choose ICCONIC?

- 🎨 **Modern UI/UX** - Antarmuka yang bersih dan responsif
- ⚡ **Lightning Fast** - Performa optimal dengan Laravel 10
- 🔒 **Secure** - Keamanan tingkat enterprise
- 📱 **Responsive** - Bekerja sempurna di semua perangkat
- 🛠️ **Customizable** - Mudah disesuaikan dengan kebutuhan bisnis

## ✨ Features

### 🏪 Core POS Features
- 🛒 **Smart Sales Management** - Proses transaksi yang cepat dan akurat
- 📦 **Inventory Control** - Manajemen stok real-time
- 👥 **Customer Management** - Database pelanggan terintegrasi
- 📊 **Advanced Reporting** - Analytics dan laporan komprehensif
- 💳 **Multiple Payment Methods** - Mendukung berbagai metode pembayaran

### 🔧 Technical Features
- 🎯 **RESTful API** - Integrasi yang mudah dengan sistem lain
- 🔐 **Role-based Access Control** - Manajemen user dan permission
- 📱 **PWA Support** - Progressive Web App ready
- 🌐 **Multi-language** - Dukungan bahasa Indonesia dan Inggris
- ☁️ **Cloud Ready** - Siap untuk deployment cloud

## 🚀 Quick Start

### 📋 Requirements

```bash
PHP >= 8.1
Composer
Node.js & NPM
MySQL >= 8.0
```

### ⚡ Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/ikballbae/icconic.git
   cd icconic
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database configuration**
   ```bash
   # Edit .env file with your database credentials
   php artisan migrate --seed
   ```

5. **Build assets**
   ```bash
   npm run build
   ```

6. **Start the application**
   ```bash
   php artisan serve
   ```

🎉 **Congratulations!** ICCONIC is now running at `http://localhost:8000`
