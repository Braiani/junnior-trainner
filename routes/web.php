<?php

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

Route::get('/', 'PublicPagesController@index')->name('homepage');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::post('/clients', 'ClientController@storeValidated')->name('voyager.clients.store')->middleware('admin.user');
    Route::put('/clients/{id}', 'ClientController@updateValidated')->name('voyager.clients.update')->middleware('admin.user');
});

Route::get('/area-cliente', '\TCG\Voyager\Http\Controllers\VoyagerAuthController@login')->name('client.area');
