<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
//    $name = session('name');
//    $token = session('token');
//    if ($name) {
//        return view('welcome', compact('name'));
//    } else {
//        session([
//            'name' => 'Thavorac',
//            'token', 'asdfafewrweasfasdf'
//        ]);
//        return view('welcome');
//    }
});
