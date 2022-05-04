<?php 
/*
https://www.artofcse.com/learning/project-analysis-and-database-design

03:44s/1:03:27s => https://www.youtube.com/watch?v=vD3fjDdXnK0&list=PLjZmR8YqVGMfc--70MPn_MyI2uPW5mFrn&index=23
Database design  | => https://drawsql.app/vir-za/diagrams/project2#
Source Code Link  | => https://github.com/almamuncsit/mini_pos

|--------------------------------------------------------------------------
|You Can user project_login_logout.zip with Breeze ---> https://github.com/1mdalamin1/Laravel/tree/project
|--------------------------------------------------------------------------
|
|||||| This may be last project only laravel :) https://www.youtube.com/watch?v=HaHV1_wrjhs&list=PLhPBqF--77ImGEZE6xSS62UVegQOIgP4g&index=3

i wont to use laravel only backend api & frontend vue.js|react.js 

*/

/*
php artisan optimize | for remove cash


composer create-project laravel/laravel:^8.0 project2
 
cd project2
 
php artisan serve
php artisan make:model Admin -m | don't need to ex user model&migration file edit to Admin

php artisan make:model User -m
php artisan make:model Group -m
php artisan make:model Product -m
php artisan make:model Category -m
php artisan make:model SaleInvoice -m
php artisan make:model SaleItems -m
php artisan make:model PurchaseInvoice -m
php artisan make:model PurchaseItems -m
php artisan make:model Payments -m
php artisan make:model Receipts -m
php artisan migrate

{{ asset('backend') }}/

php artisan make:controller UsersController 
php artisan make:controller UserGroupsController 

composer require laravelcollective/html |=> for form functionality \/ https://laravelcollective.com/docs/6.x/html

php artisan route:list |=> for check rout in application

php artisan make:controller ProductController --resource

php artisan make:request CreateUserRequest
php artisan make:request UpdateUserRequest

php artisan make:controller CategoryController -r || -r = resource
php artisan make:request CategoryRequest
php artisan make:request ProductRequest

php artisan make:controller Auth/LoginController 
php artisan make:request LoginRequest

php artisan make:migration add_admin | for create a admin
php artisan migrate
php artisan config:cache













php artisan migrate
php artisan migrate:fresh --seed
composer require laravel/breeze --dev => https://laravel.com/docs/8.x/starter-kits
php artisan breeze:install

[{(
    php artisan breeze:install
    
    npm install
    npm run dev
    php artisan migrate
)}]

php artisan make:request AdminAuthRequest

##########  Class 37 | Project | Category CRUD with Axios #########

php artisan make:model Category -m || => https://drawsql.app/vir-za/diagrams/project
php artisan make:controller Admin/CategoryController -r
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







Sorce Code = https://github.com/AR-Shahin/Web-Development-With-Laravel_batch_2






testimonial-custom {
    transform: skew(-20deg,0deg);
}
.testimonial-custom {
    clip-path: polygon(25% 0%, 100% 0%, 100% 100%, 0% 100%);
}

php artisan optimize:clear
php artisan route:clear
php artisan config:clear
php artisan cache:clear

https://www.freepik.com/premium-vector/simple-id-card-design_2623288.htm#query=school%20id%20card%20simple&position=25&from_view=search

https://www.freepik.com/premium-psd/professional-resume-template_3036231.htm#query=school%20id%20card%20simple&position=22&from_view=search


*/



