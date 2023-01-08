# Test Project (Laravel + Vue)

This is a test project for the Full-Stack Developer position that I've recentlly applied to.

Backend part of the project is built using Laravel and provides administrators with a way to manage products sold on their E-Shop. Second part of the project, Frontend part, consists from a basic E-Shop that lists currently active products and all that good stuff.

## LAMP Stack Setup

On Ubuntu 22.04.1, or one of it's variants, stack can be easily setup by executing the following. 

```bash
apt-get install apache2 mysql-server php php-xml php-dom php-curl php-mysql php-gd -y
```

## Project Setup

After the stack has been sucessfully setup, following steps must be taken to setup the Web API project.

### Step 1 - MySQL

To create a database for the project and assign a user to it, execute the following.

```sql
CREATE DATABASE `project`;

CREATE USER `admin` IDENTIFIED BY '1234567890';

GRANT ALL PRIVILEGES ON `project`.* TO `admin`;
```

### Step 2 - Configure Laravel

Configure the following parameters:
*  **APP_URL** - http://127.0.0.1:8000
*  **DB_DATABASE** - project
*  **DB_USERNAME** - admin
*  **DB_PASSWORD** - 1234567890

```bash
cp www/.env.example www/.env

nano www/.env
```

### Step 3 - Install Dependencies & Setup Admin Section

Finally, you need to install required dependencies and setup Voyager.

```bash
composer install
php artisan voyager:install
php artisan voyager:admin --create
```

### Step 4 - Test

Test if everything is working properly.

```bash
php artisan serve
```

## Contact

Please don't hesitate to contact me if you are looking for a reliable Full-Stack Developer.

My Twitter account is: [@jocic_91](https://www.twitter.com/jocic_91)

My support E-Mail address is: [support@djordjejocic.com](mailto:support@djordjejocic.com)

## Copyright & License

Copyright (C) 2023 Đorđe Jocić

Licensed under the MIT license.