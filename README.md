# Laravel-Blogs

# Project Setup Steps

Please Follow below steps for project setup with database managment:

## Minimum PHP version:
PHP 8.1

### Steps For Deployment:

-  git clone: https://github.com/priyankamackwan/Laravel-Blogs.git
- **Run cp .env.example .env file to copy example file to env**

- **Then edit your .env file with DB credentials and other settings**

- **Run [composer install] command**

- **Create Folders :**
(boostrap/cache, storage/framework/cache,storage/framework/views, storage/framework/sessions, storage/logs)

- **Run [php artisan migrate --seed] command**

- **Notice: seed is important, because it will create the first admin user for you** 

- **Run [php artisan key:generate] command**

- **If you have file/photo fields, run php artisan storage:link command**

- **Now that's it, go to your domain and login**

- **Default credentials**

- **Username: (admin@admin.com)**

- **Password: (password)**

- **composer require laravel/ui --dev**


## can run installation with special flag:
composer install --ignore-platform-reqs


For seeder package Used :
composer require orangehill/iseed

providers at /app/config/app.php:
Orangehill\Iseed\IseedServiceProvider::class,

**Now Ready to Used 😍😍😍**



From Webpatriot
**Thank You 😊**
