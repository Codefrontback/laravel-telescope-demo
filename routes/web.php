<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    dump('x');
    return view('welcome');
});

Route::get('has-exception', function(){
   throw new \Exception('I am an Exception');
});

Route::get('log', function(){
   \Log::info('log');
   dump('x');
});

Route::get('model', function(){
    $user = new App\User();
    $user->name = 'abc';
    $user->email = 'abc@gmail.com';
    $user->password = bcrypt('12345');
    $user->save();
});

Route::get('mail', function(){
    \Illuminate\Support\Facades\Mail::to('mngandhi10@gmail.com')->send(new \App\Mail\UserMail('welcome'));
});