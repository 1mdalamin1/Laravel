<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\SendUserNotification;
use Illuminate\Http\Request;

use Exception;
use Vonage\SMS\Client;
use App\Http\Controllers\Controller;


class NotificationController extends Controller
{
    function mail()
    {
        $user = User::find(1);
        $user->notify(new SendUserNotification($user));
        return "Notification has been Send !!";
    }

    public function phone()
    {
        $code  = rand(100, 500);
        $basic  = new \Vonage\Client\Credentials\Basic("08175b35", "WQB0hk7ftnmObayI");
$client = new \Vonage\Client($basic);

        $response = $client->sms()->send(
            // new \Vonage\SMS\Message\SMS("{ $user->phone }", 'Hi, Tanvir', "Your verification code is $code ")
            new \Vonage\SMS\Message\SMS("8801779395024", 'Hi, Tanvir', "Your verification code is $code ")
        );

        $message = $response->current();

        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
    }
}
