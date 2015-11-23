<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', 'UsersController@login');
Route::get('/login', 'UsersController@login');
Route::post('/login', 'UsersController@authenticate');
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');


Route::group(array('before' => 'members_auth'), function()
{
    Route::get('debtors/groups', 'DebtorsController@groups');
    Route::post('debtors/groups/create', 'DebtorsController@groupsStore');
    Route::get('debtors/groups/create', 'DebtorsController@groupCreate');
    Route::get('/debtors/groups/delete/{id}', 'DebtorsController@groupDelete');


    Route::resource('dashboards', 'DashboardsController');
    Route::resource('debtors', 'DebtorsController');
    Route::resource('creditors', 'CreditorsController');
    Route::resource('invoices', 'InvoicesController');
    Route::resource('products', 'ProductsController');



    Route::get('/logout', 'UsersController@logout');
});