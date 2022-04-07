<?php 
/**
 * 31:04s => https://www.youtube.com/watch?v=-2AYqImGBcU&list=PLnhrpn1DBwx6MadqSAvKIae1nx0PC-kiH&index=16
 * Class 24 | Event | Listener | Mail | Queue
 * 
 * ___________________________________________________________
 * composer create-project laravel/laravel:^8.0 c2425
 * cd c2425
 * php artisan serve
 * 
 * 
 */

### Event ---
/*
php artisan make:event UserCreatedEvent
php artisan make:listener UserCreatedListener
 => then bind Event&Listener from Providers

 php artisan make:mail SendSMailToUser | then creata file in resources/view/mail/user.blade.php > now crate mail body > link SendSMailtoUser a(function build() Build the message. ) input this link return $this->view('mail.user');

php artisan queue:table => for migration file
php artisan migrate => for migration file
php artisan queue:listen => must be run  if not run this|| php artisan queue:work 

## class 25 On
php artisan make:notification SendUserNotification
php artisan make:controller NotificationController

==== Nexmo SMS Laravel >>===>> https://www.vonage.com/log-in/?icmp=utilitynav_login_novalue

composer require nexmo/client

composer require vonage/client ||=> Nexmo SMS Send

NEXMO_KEY=08175b35
NEXMO_SECRET=WQB0hk7ftnmObayI




btngradient


*/







