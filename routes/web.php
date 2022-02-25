<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\MailController;
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

Route::get('/', [BookController::class, 'getHomePage'])->name('getHomePage');

Route::get('/books', [BookController::class, 'getBooksPage'])->name('getBooksPage');

Route::get('/manage', [BookController::class, 'getManagePage'])->name('getManagePage');

Route::get('/contact-us', [BookController::class, 'getContactPage'])->name('getContactPage');

Route::get('/create-book', [BookController::class, 'getCreatepage'])->name('getCreatePage');

Route::post('/createBook', [BookController::class, 'createBook'])->name('createBook');

Route::get('/update-book/{id}', [BookController::class, 'getUpdatePage'])->name('getUpdatePage');

Route::patch('/updateBook/{id}', [BookController::class, 'updateBook'])->name('updateBook');

Route::delete('/delete-book/{id}', [BookController::class, 'deleteBook'])->name('deleteBook');

Route::post('/send-email', [MailController::class, 'sendEmail'])->name('sendEmail');


