#### Let's get started
1. > `git clone https://github.com/zool-tech010/dashboard.git`
2. > `cd dashboard`
3. > `composer install`
4. > `copy .env-example to .env`
5. > `setup database credentials on .env`
6. > `php artisan key:generate` to generate new key
7. > `composer dump-autoload` to clean the cache
8. > `php artisan migrate --seed`
9. > with database seeder will create user with credential
10. > `email : admin@admin.com`
11. > `password : password`
12. > now run `php artisan serve` to start the server
13. > access the [dashboard](http://127.0.0.1:8000) `127.0.0.1:8000` as the default host:port
