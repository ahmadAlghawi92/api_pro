<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


use App\Models\book;

use App\Http\Controllers\BookController;
Route::post('/createNewBook' ,'BookController@addBook');
Route::get('/findBook' , 'BookController@showBooks');
Route::put('/updateBook' , 'BookController@editBook');
Route::delete('/deleteBook' , 'BookController@deleteBook');
