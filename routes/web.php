<?php

use Illuminate\Support\Facades\Route;

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

// Route::domain('blog.lyzer-tech.test')->group(function () {
//     Route::view('welcome');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/frame', function () {
    return view('architecture/0frame');
});

Route::get('/crm', function () {
    return view('crm.index');
});
Route::get('/sales', function () {
    return view('crm.app-calendar');
});

Route::get('/purchasing', function () {
    return view('purchasing');
});

Route::get('/labs', function () {
    return view('labs');
});

Route::get('/treasure', function () {
    return view('navbar.sidebar.treasure');
});


