<?php
use App\Http\Controllers\HomeController;
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
    return 'Hello World';
});


Route::get('/welcome', function () {
    return view('welcome');
});
//3- call 
//Route::get(Url:'/test',[HomeController::class,test,'index'])->name(name:'test');
//Route::get(Url:'/',[\App\Http\Controllers\HomeController::class,'index'])->name(name:'home');
//4- Route-> co
//5  route with parameters
//Route::get(Url:'/param/{id}',[HomeComtroller::class,'param'])->name(name:'param');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
