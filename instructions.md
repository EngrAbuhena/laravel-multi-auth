1. Create project
>`composer create-project laravel/laravel laravel-multi-auth`

2. Install Breeze
>`composer require laravel/breeze --dev`
>
>`php artisan breeze:install`

3. Update migration table `User` Table

4. Create `UserTableSeeder`
>`php artisan make:seeder UserTableSeeder`
5. Update `UserTableSeeder` class
6. Make migrate
>`php artisan migrate`
> 
or, 
> `php artisan migrate:fresh`
7. Make database seed
>`php artisan db:seed --class=UserTableSeeder`
8. Make controllers
>`php artisan make:controller AdminController`
> 
>`php artisan make:controller VendorController`
9. Update controllers
10. Make middleware `Role`
>`php artisan make:middleware Role`
11. Include the middleware into `Kernel.php` file
12. Update `Role` middleware
13. update routes from `web.php`
14. Update `Store` function from `AuthenticatedSessionController.php`
15. Check the app
>`php artisan serve`


