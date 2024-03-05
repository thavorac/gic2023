<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;

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

Route::get("/verify_otp", [AuthenticationController::class, 'verifyOTP']);
Route::get("/home", function() {
    $menus = ["Home", "Product", "Category", "Blog"];
    $title = "Awesome App";
    $purchasedItems = ["Book", "Pencil", "Eraser"];
    $favoriteItems = ["Calculator", "Bag"];

    //return view("frontend.home", compact("menus", "title", "purchasedItems"));
    return view("frontend.home", ["menus" => $menus, "title" => $title, "purchasedItems" => $purchasedItems, "favoriteItems" => $favoriteItems]);
});
