<?php 
/*

18:45s / 23:43s  (35)==> https://www.youtube.com/watch?v=10SBS93zyFY&list=PLnhrpn1DBwx6MadqSAvKIae1nx0PC-kiH&index=26

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

--S-t-a-r-t-->  Class 34 | Http Client | Session | Custom Helper File <--S-t-a-r-t-- 

php artisan make:controller SessionController => 

composer dump-autoload

php artisan make:controller HTTPClientController => 


--S-t-a-r-t-->  Class 35 | Has One Through | Has Many Through <--S-t-a-r-t-- 

php artisan make:model Mechanic -m => 
php artisan make:model Owner -m => 
php artisan make:model Car -m => 

php artisan migrate 


## Has Many Through ## 

php artisan make:model District -m => 
php artisan make:model Thana -m => 
php artisan make:model Village -m => 

php artisan migrate:fresh --seed 



https://phoenixnap.com/blog/software-development-life-cycle

2:02s বেহেস্তের আশ্রাফ আলী থানভীর না => https://www.youtube.com/watch?v=tl2pQ90fpqQ
php artisan migrate:fresh 
*/