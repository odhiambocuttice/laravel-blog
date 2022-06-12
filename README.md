Laravel Blog

Requirements
• PHP 7.3 or higher
• Node 12.13.0 or higher

Usage
Setting up your development environment on your local machine:

git clone 
cd laravel-blog
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
Before starting
Create a database

mysql
create database laravel-blog;
exit;
Setup your database credentials in the .env file

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel-blog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}


Migrate the tables

php artisan migrate

php artisan serve