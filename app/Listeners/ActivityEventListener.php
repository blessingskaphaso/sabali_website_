<?php

namespace App\Listeners;

use App\Models\Activity;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Auth\Events\Registered;

class ActivityEventListener
{
    public function handleUserLogin(Login $event)
    {
        Activity::logActivity(
            'user_login',
            'User logged into the system',
            $event->user->id
        );
    }

    public function handleUserLogout(Logout $event)
    {
        Activity::logActivity(
            'user_logout', 
            'User logged out of the system',
            $event->user->id ?? null
        );
    }

    public function handleUserRegistered(Registered $event)
    {
        Activity::logActivity(
            'user_registered',
            'New user account created: ' . $event->user->name,
            $event->user->id
        );
    }
}