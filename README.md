#### Let's get started
1. > `git clone https://github.com/zool-tech010/dashboard.git`
2. > `cd dashboard`
3. > `composer install`
4. > `copy .env-example to .env`
5. > `php artisan key:generate` to generate new key
6. > `composer dump-autoload` to clean the cache
7. > `php artisan migrate --seed`
8. > with database seeder will create user with credential
9. > `email : admin@admin.com`
10. > `password : password`
11. > now run `php artisan serve` to start the server
12. > access the [dashboard](http://127.0.0.1:8000) `127.0.0.1:8000` as the default host:port
