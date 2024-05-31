<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

Route::get('/', function(){
    return view('welcome');
});

Route::get('/bind', [SiteController::class, 'bind']);

Route::get('/o-nas', function(){
    return [
        'title' => 'O nas'
    ];
});

Route::get('/user/{slug}/{action}', function(string $slug, string $action){
    return "$slug $action";
});

Route::get('/user/{slug}', [SiteController::class, 'user']);

Route::get('/request', [SiteController::class, 'request']);
