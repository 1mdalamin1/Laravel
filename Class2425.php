<?php 
/**
 * 32:38s => https://www.youtube.com/watch?v=MHw6K3QrUNE&list=PLnhrpn1DBwx6MadqSAvKIae1nx0PC-kiH&index=15
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
php artisan queue:listen => must be run 



*/







