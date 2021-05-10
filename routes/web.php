<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\BlogController;
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

Route::get('/', [BlogController::class, 'artikel']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/detail/{id}', [BlogController::class, 'detail']);
Route::get('/blog/input', [BlogController::class, 'input']);
Route::post('/blog', [BlogController::class, 'proses_input']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect('blog');
})->name('dashboard');
// Route::get('/dashboard/post', function () {
//     return view('post');
// });
Route::get('/dashboard/input', function () {
    return view('post_input');
});
Route::get('/dashboard/edit', function () {
    return view('post_edit');
});