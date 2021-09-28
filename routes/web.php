<?php

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

Route::get('/testimonials', function () {
    return view('testimonials');
})->middleware(['auth'])->name('testi');

Route::get('/dashboard', function () {
    return view('backoffice.dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');

Route::get('/testimonials', function () {
    return view('backoffice.testimonials.testimonial');
})->middleware(['auth', 'admin'])->name('testiB');

Route::get('/back/articles', function () {
    return view('backoffice.articles.article');
})->middleware(['auth', 'admin'])->name('article');

Route::get('/back/comments', function () {
    return view('backoffice.commentaires.comment');
})->middleware(['auth', 'admin'])->name('comment');

Route::get('/back/contact', function () {
    return view('backoffice.contact.contact');
})->middleware(['auth', 'admin'])->name('contact');

require __DIR__.'/auth.php';
