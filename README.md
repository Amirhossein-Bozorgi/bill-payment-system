# 🏢 Apartment Bill Payment System | سیستم مدیریت قبض آپارتمان

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)


![LandingPage][ScreenShots/LandingPage.png]
---

<div dir="rtl">

## فارسی

یک سیستم جامع مدیریت قبض آپارتمان با پنل مدیریتی کامل برای مدیران و ساکنین.

### ✨ امکانات

- 🔐 **ورود جداگانه** برای مدیر و ساکنین
- 📋 **مدیریت قبوض** — ثبت، ویرایش و پیگیری پرداخت‌ها
- 👥 **مدیریت ساکنین** — افزودن و مشاهده اطلاعات کامل
- 🖥️ **پنل ادمین** — داشبورد کامل برای مدیریت آپارتمان
- 📱 **طراحی ریسپانسیو** با Bootstrap

### 🛠️ تکنولوژی‌ها

| بخش | تکنولوژی |
|-----|----------|
| Backend | PHP |
| Frontend | HTML, CSS, JavaScript |
| Database | MySQL |
| UI Framework | Bootstrap |

### 🚀 نصب و راه‌اندازی

**پیش‌نیازها:** XAMPP، PHP 7.4+، MySQL 5.7+

```bash
git clone https://github.com/Amirhossein-Bozorgi/bill-payment-system.git
cp -r bill-payment-system /opt/lampp/htdocs/
```

- phpMyAdmin رو باز کن و فایل `paybills.sql` رو import کن
- فایل `DB.php` رو با اطلاعات دیتابیست تنظیم کن
- برو به: `http://localhost/bill-payment-system`

### 🔑 اطلاعات ورود پیش‌فرض

| نقش | نام کاربری | رمز عبور | کد ملی |
|-----|-----------|---------|--------|
| مدیر | admin | 1234 | 0000000000 |


</div>

---

## 🇬🇧 English

A comprehensive apartment bill payment system with a full admin panel for managers and residents.

### ✨ Features

- 🔐 **Separate login** for manager and residents
- 📋 **Bill management** — create, edit and track payments
- 👥 **Resident management** — add and view complete resident info
- 🖥️ **Admin panel** — full dashboard for apartment management
- 📱 **Responsive design** with Bootstrap

### 🛠️ Tech Stack

| Layer | Technology |
|-------|-----------|
| Backend | PHP |
| Frontend | HTML, CSS, JavaScript |
| Database | MySQL |
| UI Framework | Bootstrap |

### 🚀 Installation

**Requirements:** XAMPP, PHP 7.4+, MySQL 5.7+

```bash
# 1. Clone the repository
git clone https://github.com/Amirhossein-Bozorgi/bill-payment-system.git

# 2. Move to htdocs
cp -r bill-payment-system /opt/lampp/htdocs/
```

3. Open phpMyAdmin and import `paybills.sql`
4. Configure `DB.php` with your database credentials:

```php
$host = "localhost";
$user = "root";
$password = "your_password";
$database = "paybills";
```

5. Visit: `http://localhost/bill-payment-system`

### 🔑 Default Login

| Role | Username | Password | National Code |
|------|---------|---------|--------------|
| Manager | admin | 1234 | 0000000000 |


### 📁 Project Structure

```
bill-payment-system/
├── CSS/                  # Stylesheets
├── JS/                   # JavaScript files
├── img/                  # Images
├── DB.php                # Database connection
├── index.php             # Main page
├── login.html            # Login page
├── managerLogin.php      # Manager login
├── residentLogin.php     # Resident login
├── addResidents.php      # Add resident
├── managerFullInfo.php   # Manager full info
└── README.md
```

### 🤝 Contributing

Pull requests and issues are welcome!

1. Fork the project
2. Create your branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

### 📄 License

This project is licensed under the MIT License.

---

<div align="center">
  Made with ❤️ by <a href="https://github.com/Amirhossein-Bozorgi">Amirhossein Bozorgi</a>
</div>
