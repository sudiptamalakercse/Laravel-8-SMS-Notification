<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Models\User;
use App\Notifications\SmsNotification;

class SmsNotificationController extends Controller
{
    public function notify() {
    $users=User::get();
    Notification::send($users, new SmsNotification('JemsBond007'));
    return view('welcome');
}
}
