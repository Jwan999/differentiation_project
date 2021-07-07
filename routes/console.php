<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('make:user', function () {
    $new = new \App\Models\User;
    $new->name = "Teacher";
    $new->email = "me@user.com";
    $new->password = \Illuminate\Support\Facades\Hash::make("password");
    $new->save();
})->purpose('Creates the first user');
