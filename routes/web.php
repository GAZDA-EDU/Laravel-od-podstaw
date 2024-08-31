<?php
use Illuminate\Http\Request;
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
})->name('index');

Route::get('/sesja-1', function(Request $request){
    return $request->session()->get('username', 'strefakursow-1');
    //return view('welcome');
});

Route::get('/sesja-2', function(){
    session([
        'username' => 'strefakursow-2-sesja'
    ]);
    return session('username', 'strefakursow-2');
    //return view('welcome');
});

Route::get('/sesja-all', function(){
    session([
        'username' => 'strefakursow-2-sesja'
    ]);
    return session()->all();
    //return view('welcome');
});

Route::get('/sesja-forget', function(){
    session()->forget('username');

    if(!session()->has('username')){
        session(['username' => 'strefa']);
    }
    return session()->all();
    //return view('welcome');
});

Route::get('/sesja-flush', function(){
    session()->flush();
    return session()->all();
    //return view('welcome');
});

Route::get('/inny-adres', function (){
    $previous = url()->previous();
    return "<a href='$previous'>Wróć</a>";
})->name('index.other');

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

Route::get('/response', [SiteController::class, 'response'])->name('response');

Route::get('/response/redirect/{reason}', [SiteController::class, 'responseRedirect'])->name('response.redirect');

Route::get('/view', [SiteController::class, 'view' ]);

