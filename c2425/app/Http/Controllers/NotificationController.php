<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\SendUserNotification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    function mail()
    {
        $user = User::find(1);
        $user->notify(new SendUserNotification($user));
        return "Notification has been Send !!";
    }
}
