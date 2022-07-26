<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/dashboard',[HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/edit-posting/{id}',[HomeController::class, 'editPosting'])->name('posting.edit');
    Route::post('/update-posting/{id}',[HomeController::class, 'updatePostings'])->name('posting.update');
    Route::post('/insert.postings',[HomeController::class, 'insertPostings'])->name('insert.postings');
});
Route::get('/', [HomeController::class, 'index']);
Route::get('/category/{id}',[HomeController::class, 'category'])->name('category.show');