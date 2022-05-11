<?php 
/*
https://www.artofcse.com/learning/project-analysis-and-database-design

2:18s/52:39s => video No:- 53 Laravel Project (Add Users filter option and show balance)
2:18s/52:39s => https://www.youtube.com/watch?v=Ve1PjOvXTIM&list=PLjZmR8YqVGMfc--70MPn_MyI2uPW5mFrn&index=35
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

php artisan make:controller UserSalesController 
php artisan make:request InvoiceProductRequest
php artisan make:request InvoiceRequest
php artisan make:controller UserPurchasesController 
php artisan make:controller UserPaymentsController 
php artisan make:controller UserReceiptsController 
php artisan make:request PaymentRequest
php artisan make:request ReceiptRequest

php artisan make:migration update_payment_and_receipt_note || php artisan migrate

must be install for update migration table => composer require doctrine/dbal

php artisan make:migration add_note_to_sales_and_purchase_table || if wont to rollback php artisan migrate::rollback

php artisan make:migration add_invoice_id_on_payments_and_receipts ||
php artisan migrate

php artisan make:controller ProductsStockController 

php artisan make:migration add_has_stock_on_products_table --table=products ||

php artisan make:controller Reports/SaleReportController
php artisan make:controller Reports/DayReportsController
php artisan make:controller DashboardController
php artisan make:controller UserReportsController



php artisan migrate


















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



*/



