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




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



Route::get('/', 'HomeController@index');

Route::get('/about-us', 'AboutUsController@index');

Route::get('/get-to-know', 'AboutUsController@why');


Route::get('/product-services', 'ProductServicesController@index');
Route::get('/support', 'ProductServicesController@support_view');
Route::get('/enterprise', 'ProductServicesController@enterprise_view');
Route::get('/info', 'ProductServicesController@telecom_view');
Route::get('/telecom-services', 'ProductServicesController@infoview');



Route::get('/partners', 'PartnersController@index');


Route::get('/blog', 'BlogController@index');
Route::get('/blog/detail', 'BlogController@detail');


Route::get('/contacts', 'ContactsController@index');
