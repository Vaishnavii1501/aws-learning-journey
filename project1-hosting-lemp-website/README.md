📝 Description:
This project demonstrates how to host a simple website using the LEMP stack (Linux, Nginx, MySQL, PHP) on AWS,
and view live data entries from an HTML form into a MySQL database.

# 1. Create script file
nano lemp.sh

# 2. Go to Nginx web directory
cd /usr/share/nginx/html/
ls

# 3. Create signup HTML form
sudo nano signup.html

# 4. Create PHP script to handle form submission
sudo nano submit.php

# 5. Enter MySQL shell
sudo mysql
# or
sudo mysql -u root -p

# 6. Copy the submit PHP file for backup
sudo cp submit.php submit.txt

# 7. Install PHP-MySQL support
sudo yum install php8.3-mysqlnd.x86_64 -y

# 8. Restart LEMP services
sudo service nginx restart
sudo service mariadb restart
sudo service php-fpm restart


 
