<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/hello', function () {
    return view('hello');
});

Route::get('users/{id}/friends', function ($id) {
    return $id." "."friends";
})->where('id','[0-9]+');

Route::get('users/{id}/friends', function ($id) {
    return $id." "."friends";
})->where('id','[0-9]+');

Route::ge







Route::get('/hello', function () {
    return view('hello');
});

Route::get('users/{id}/friends/{msg}',function ($id,$ms g){
    return$msg."".$id."friends.";
})->where('id','[0-9]+');
