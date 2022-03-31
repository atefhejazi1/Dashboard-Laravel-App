<?php

use App\Http\Controllers\BlogController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

// Route::get('/register', function () {
//     return redirect('login');
// });

Route::prefix('blogs')->middleware(['auth'])->group(function () {
    Route::get('/all', [BlogController::class, 'index']);
});

// Route::get('blogs/all', function () {
//     return view('blogs.allBlogs');
// })->middleware(['auth']);
