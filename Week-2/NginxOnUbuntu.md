🔧 Steps to install and run Nginx:
SSH into EC2 instance

ssh -i password.pem ubuntu@<your-ec2-public-ip>
Install Nginx


sudo apt-get update
sudo apt-get install nginx
Control Nginx service


sudo service nginx start      # Start the server
sudo service nginx status     # Check server status
sudo service nginx stop       # Stop the server
sudo service nginx reload     # Reload config files without downtime
Default directory for HTML files


cd /var/www/html/
Edit the Nginx default config file


sudo nano /etc/nginx/sites-enabled/default
