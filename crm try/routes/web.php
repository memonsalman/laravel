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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('accounts/create','AccountsController@create');
Route::get('/accounts','AccountsController@index');
Route::post('/accounts','AccountsController@save');
Route::get('/accounts/show/{id}','AccountsController@show');
Route::get('/accounts/edit/{id}','AccountsController@edit');
Route::post('/accounts/update/','AccountsController@update');
// Route::get('/accounts/delete/{id}','AccountsController@delete');
Route::post('/accounts/deleterecod/','AccountsController@deleterecod');



Route::get('contacts/create','ContactsController@create');
Route::get('/contacts','ContactsController@index');
Route::post('/contacts','ContactsController@save');
Route::get('/contacts/show/{id}','ContactsController@show');
Route::get('/contacts/edit/{id}','ContactsController@edit');
Route::post('/contacts/update/','ContactsController@update');
// Route::get('/contacts/delete/{id}','ContactsController@delete');
Route::post('/contacts/deleterecod/','ContactsController@deleterecod');



Route::get('leads/create','LeadsController@create');
Route::get('/leads','LeadsController@index');
Route::post('/leads','LeadsController@save');
Route::get('/leads/show/{id}','LeadsController@show');
Route::get('/leads/edit/{id}','LeadsController@edit');
Route::post('/leads/update/','LeadsController@update');
// Route::get('/leads/delete/{id}','LeadsController@delete');
Route::post('/leads/deleterecod/','LeadsController@deleterecod');
Route::get('/leads/convert/{id}','LeadsController@convert');


Route::get('tasks/create','TasksController@create');
Route::get('/tasks','TasksController@index');
Route::post('/tasks','TasksController@save');
Route::get('/tasks/show/{id}','TasksController@show');
Route::get('/tasks/edit/{id}','TasksController@edit');
Route::post('/tasks/update/','TasksController@update');
// Route::get('/leads/delete/{id}','LeadsController@delete');
Route::post('/tasks/deleterecod/','TasksController@deleterecod');
Route::get('/tasks/convert/{id}','TasksController@convert');

Route::get('/ajax-subcat/{id}','TasksController@gettable');
