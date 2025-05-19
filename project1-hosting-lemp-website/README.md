# Project: Hosting LEMP Website with MySQL Data

This project demonstrates how to host a simple website using the LEMP stack (Linux, NGINX, MySQL, PHP) on AWS EC2,
and view live data entries from an HTML form into a MySQL database.

---

## 🌐 Tech Stack
- **Linux (Amazon Linux 2)**
- **NGINX**
- **MySQL**
- **PHP**

---

## 📁 Files
- `signup.html` — HTML registration form
- `submit.php` — Backend script to handle form submission
- `lemp.sh` — Optional script file for automation
- MySQL database setup commands

---

## 📌 Steps

### 1. Install LEMP Stack
```bash
sudo yum update -y
sudo amazon-linux-extras enable php8.2
sudo yum clean metadata
sudo yum install nginx mariadb105-server php php-mysqlnd -y
sudo systemctl start nginx
sudo systemctl start mariadb
sudo systemctl start php-fpm
sudo systemctl enable nginx mariadb php-fpm
