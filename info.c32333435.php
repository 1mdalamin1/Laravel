<?php 
/*

08:08s / 45:37s  (33)==> https://www.youtube.com/watch?v=9Ii9p044O7A&list=PLnhrpn1DBwx6MadqSAvKIae1nx0PC-kiH&index=24

--S-t-a-r-t-->  Class 32 | Artisan Console | Task Scheduling <--S-t-a-r-t-- 
___________________________________________________________
composer create-project laravel/laravel:^8.0 c32-35
 
cd c32-35
 
php artisan serve

php artisan make:command CustomCommand || php artisan custom
__________________________________________________________
php artisan migrate --seed
php artisan migrate:fresh --seed
php artisan schedule:work

--S-t-a-r-t-->  Class 33 | Cache | Database <--S-t-a-r-t-- 

install Redis => https://redis.io/
redis-cli => https://github.com/microsoftarchive/redis/releases/tag/win-3.0.504 || https://www.youtube.com/watch?v=6mtu_dFxm28
composer require predis/predis => Install this pakage | https://laravel.com/docs/8.x/redis
php artisan make:controller RedisController => 



php artisan cache:table => php artisan migrate
 => 
composer require barryvdh/laravel-debugbar --dev => https://github.com/barryvdh/laravel-debugbar
 => 



*/