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

route::get('/',[HomeController::class, 'index']);
route::get('/list',[HomeController::class, 'list']);
route::get('/add',[HomeController::class, 'add']);
route::get('/home',[HomeController::class, 'home']);
route::post('/add',[HomeController::class, 'postadd']);
route::get('/delete/{id}',[HomeController::class, 'delete']);
route::get('/edit/{id}',[HomeController::class, 'edit']);
route::post('edit',[HomeController::class, 'update']);
route::view('register','register');
route::post('register',[HomeController::class, 'register']);
route::view('login','login');
route::post('login',[HomeController::class, 'login']);
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::post('/subscribe', [HomeController::class, 'subscribe'])->name('subscribe');
