# 🚀 LEMP + AWS S3 File Upload Project

This project demonstrates a PHP web application running on a LEMP (Linux, Nginx, MySQL, PHP) stack, allowing users to upload files that are stored in an Amazon S3 bucket. File metadata (name and URLs) is stored in a MySQL database, and CloudFront URLs are optionally generated for faster file delivery.

---

## 📦 Features

- Upload files through a web form
- Store files in AWS S3
- Generate public S3 and CloudFront URLs
- Save metadata to MySQL
- Runs on a LEMP stack (Linux + Nginx + MySQL + PHP)
- Uses AWS SDK for PHP via Composer

---

---

Let me know if you also want:
- a working `index.html` form file,
- the modified `upload.php` with actual AWS code,
- or deployment on a remote EC2 server.








Here’s a simple step-by-step list for setting up your LEMP + AWS S3 File Upload Project:

✅ Simple Steps Overview
Install LEMP stack


sudo apt update
sudo apt install nginx mysql-server php-fpm php-mysql php-cli curl unzip
Create MySQL database and table


CREATE DATABASE facebook;
USE facebook;
CREATE TABLE posts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  s3url VARCHAR(512),
  cfurl VARCHAR(512),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


Install Composer


sudo curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
sudo ln -s /usr/local/bin/composer /usr/bin/composer
Install AWS SDK for PHP


composer require aws/aws-sdk-php



Set up your project folder

Place index.html (upload form)

Place upload.php (handles upload & AWS)

Include vendor/ (created by Composer)

Update upload.php

Load AWS SDK

Configure:

AWS access key & secret

S3 bucket name

Region

CloudFront base URL

Configure Nginx to serve your project


sudo nano /etc/nginx/sites-available/default
# Set root to your project folder
sudo systemctl restart nginx
Visit http://localhost

Fill form and upload a file

File uploads to S3

Metadata saved to MySQL




