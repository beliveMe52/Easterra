<?php

use Illuminate\Support\Facades\Route;
use Telegram\Bot\Telegram;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/create', 'CreateController@index');
Route::post('/created', 'CreateController@create');


Route::get('/admin', 'AdminController@index');
Route::get('/admin/login', 'AdminController@login');

Route::get('/question/{id}/like', 'AdminController@like');
Route::get('/question/{id}/dislike', 'AdminController@dislike');


Route::post('/', 'BotController@index');


Route::get('/game', 'BotController@game');

//
// $updates = Telegram::getWebhookUpdates();
//
// // Example of POST Route:
// Route::post('/<token>/webhook', function () {
//     $updates = Telegram::getWebhookUpdates();
//
//     return 'ok';
// });
