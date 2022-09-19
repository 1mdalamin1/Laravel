<?php

# php artisan serve && npm run watch|| npm run dev |=> run commend

/*|
00:52s/08:47s --#30 => https://www.youtube.com/watch?v=xeHbptzpXSE&list=PLhPBqF--77ImGEZE6xSS62UVegQOIgP4g&index=30


create database name civanoglu & connate .env file and run |=> php artisan migrate
php artisan serve && npm run watch|| npm run dev |=> run commend
|||||| This may be last project only laravel :)
|

|--------Laravel private course - property listing ----------

| Project Planning | Database design  | => https://drawsql.app/home

| Sorce Code = https://github.com/raselupm/civanoglu

|-----------------------------------------------------------------
|
|||||| This may be last project only laravel :)

i wont to use laravel only backend api & frontend vue.js(nuxt.js)|react.js

*/

/*
___________________________________________________________
composer create-project laravel/laravel:^8.0 civanoglu

cd civanoglu

php artisan serve
composer require laravel/breeze --dev => https://laravel.com/docs/8.x/starter-kits
php artisan breeze:install

[{(
    php artisan breeze:install

    npm install
    npm run dev
    php artisan migrate
)}]

 |=> https://emojipedia.org/flags/
Slick Slider |=> https://kenwheeler.github.io/slick/
npm install --save jquery |=> https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js


php artisan make:model Property -mc
php artisan make:model Media -mc
php artisan migrate:fresh
php artisan make:controller HomeController -r

npm install --save jquery

php artisan make:model Location -mc

php artisan make:factory PropertyFactory
php artisan make:factory MediaFactory
php artisan make:factory LocationFactory
php artisan make:model Page -mc
php artisan make:model Contact -mc
php artisan make:model Dashboard -mc





php artisan migrate:fresh --seed

## Send mail from Laravel to user
|-> .env file config then 
php artisan make:mail ContactMail |-> set mail connect
|-> views/emails/contact-mail.blade.php for mail body create must be use html table
|-> ContactController.php to control mail

## Send mail from Laravel to user via Queue

php artisan queue:table
php artisan migrate
go to .env |-> QUEUE_CONNECTION=database
php artisan make:job ProcessContactMail
php artisan queue:listen => must be run  if not run this|| php artisan queue:work 


composer require mcamara/laravel-localization |=> https://github.com/mcamara/laravel-localization
php artisan vendor:publish --provider="Mcamara\LaravelLocalization\LaravelLocalizationServiceProvider" |=> 
bn, tr, en |=> After that, config/laravellocalization.php will be created.

Go to |-> app/http/kernel.php 
Go to |-> routes/web.php

multiple languages || বিভিন্ন ভাষা |=> https://github.com/raselupm/civanoglu/blob/d0416ef9232b4c105765727d91651643e09076c1/resources/views/components/header.blade.php


php artisan make:model DashboardController -mc


 === Use Notification === https://php-flasher.io/
composer require php-flasher/flasher-laravel |=> https://php-flasher.io/docs/framework/laravel/
{
    // $flasher->addSuccess('success message');
    // $flasher->addError('error message');
    // $flasher->addWarning('warning essage');
    // $flasher->addInfo('info message');
}

 === Use Icon Packages === https://feathericons.com/
npm install feather-icons --save |=> 

 === Use Light Box Packages === https://sorgalla.com/lity/ || https://github.com/jsor/lity
npm i lity |=> 

=== Use GitHub Actions === https://github.com/features/actions
|=> https://github.com/marketplace


php artisan make:controller Admin/PageController --resource |=>  --resource = -r
php artisan make:controller Admin/PropertyController --resource |=>  --resource = -r
php artisan make:controller Admin/LocationController --resource |=>  --resource = -r
php artisan make:controller Admin/UserController --resource |=>  --resource = -r














php artisan make:request AdminAuthRequest

php artisan migrate
php artisan migrate:fresh --seed
##########  Class 37 | Project | Category CRUD with Axios #########

php artisan make:model Category -m || => https://drawsql.app/vir-za/diagrams/project
php artisan make:controller Admin/CategoryController -r
php artisan make:controller Admin/SubCategoryController -r
php artisan make:model SubCategory -m


php artisan migrate

php artisan make:request CategoryRequest
php artisan make:request CategoryUpdateRequest

======================need CRUD Color & Size later now use create seeder===================

Real Project must be use fileable not guarded | cause fileable succerut more then guarded

php artisan make:model Color -ms
php artisan make:model Size -ms
php artisan make:controller Admin/SizeController

php artisan migrate:fresh --seed

php artisan make:model Product -mf
php artisan make:controller Admin/ProductController




php artisan make:seeder CategorySeeder
php artisan make:seeder SubCategorySeeder


php artisan migrate:fresh --seed

php artisan make:request ProductRequest
php artisan make:model ProductSlider -m
php artisan storage:link

php artisan route:list

php artisan make:factory ProductFactory
php artisan migrate:fresh --seed

php artisan make:model Customer -m
php artisan make:controller Frontend/CustomerController
php artisan make:controller Frontend/CartController
php artisan make:controller Frontend/ProductController
php artisan make:controller Frontend/HomeController
php artisan make:controller Frontend/OrderController

php artisan migrate
php artisan optimize

php artisan make:request CustomerLoginRequest
php artisan make:model Cart -m
php artisan make:controller Frontend/CartController
php artisan migrate

#### Product Order ####

php artisan make:model Shipping -m
php artisan make:model Payment -m
php artisan make:model Order -m
php artisan make:model OrderDetails -m
php artisan migrate
php artisan make:controller Frontend/OrderController
php artisan make:middleware PreventEmptyOrder


php artisan make:controller Backend/OrderController



php artisan make:migration update_payment_and_receipt_note || php artisan migrate

must be install for update migration table => composer require doctrine/dbal

php artisan make:migration add_note_to_sales_and_purchase_table || if wont to rollback php artisan migrate::rollback

php artisan make:controller CategoryController -r || -r = resource


Sorce Code = https://github.com/AR-Shahin/Web-Development-With-Laravel_batch_2






testimonial-custom {
    transform: skew(-20deg,0deg);
}
.testimonial-custom {
    clip-path: polygon(25% 0%, 100% 0%, 100% 100%, 0% 100%);
}

php artisan optimize | for remove cash
php artisan optimize:clear
php artisan route:clear
php artisan config:clear
php artisan cache:clear

https://www.freepik.com/premium-vector/simple-id-card-design_2623288.htm#query=school%20id%20card%20simple&position=25&from_view=search

https://www.freepik.com/premium-psd/professional-resume-template_3036231.htm#query=school%20id%20card%20simple&position=22&from_view=search


*/
   # Group Routers
// Route::prefix('order')->name('order.')->controller(OrderController::class)->group(function () {

//     Route::get('/', 'index')->name('index');
//     Route::get('/details/{order}', 'details')->name('details');
//     Route::post('/status/{order}', 'status')->name('status');
// });

 //Route::resource('users', UsersController::class, ['except' => ['show'] ]); // except -> create route without show
    //Route::resource('users', UsersController::class, ['only' => ['show', 'destroy'] ]); // only -> create route only show , destroy

    /*
    7 in 1 This Route::resource('users', UsersController::class); in blow
    Route::get('users', [UsersController::class, 'index']);
    Route::POST('users', [UsersController::class, 'store']);
    Route::POST('users/create', [UsersController::class, 'create']);
    Route::POST('users/{user}', [UsersController::class, 'show']);
    Route::POST('users/{user}', [UsersController::class, 'update']);
    Route::POST('users/{user}', [UsersController::class, 'destroy']);
    Route::POST('users/{user}/edit', [UsersController::class, 'edit']);



    [contact-form-7 id="8" title="Contact form 1"]




/wp-content/uploads/2022/05/facebook.png

<img src="{{ asset(.'/images/'.$article->image) }}" alt="" title="">

php artisan storage:link |=> https://www.itsolutionstuff.com/post/how-to-display-image-from-storage-folder-in-laravelexample.html



https://laravel.com/docs/8.x/eloquent-resources




    */
