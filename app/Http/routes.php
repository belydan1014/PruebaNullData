<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return Redirect::to('home');
});

Route::auth();

Route::get('/home', 'HomeController@index');

/* empleados */
Route::group(['middleware' => ['auth']], function () {
    Route::get('empleado', ['as' => 'empleado.index', 'uses' => 'EmployeesController@index']);
    Route::get('empleado/create', ['as' => 'empleado.create', 'uses' => 'EmployeesController@create']);
    Route::post('empleado', ['as' => 'empleado.store', 'uses' => 'EmployeesController@store']);
    Route::patch('empleado/{empleado}', ['as' => 'empleado.update', 'uses' => 'EmployeesController@update']);
    Route::get('empleado/{empleado}/delete', ['as' => 'empleado.delete', 'uses' => 'EmployeesController@delete']);
    Route::delete('empleado/{empleado}', ['as' => 'empleado.destroy', 'uses' => 'EmployeesController@destroy']);
    Route::get('empleado/direccion/{empleado}/create', ['as' => 'empleado.direccion.create', 'uses' => 'EmployeesController@direccionCreate']);
    Route::patch('empleado/{empleado}/direccion', ['as' => 'empleado.direccion.store', 'uses' => 'EmployeesController@storeDireccion']);
    Route::get('empleado/{empleado}/direcciones', ['as' => 'empleado.direcciones', 'uses' => 'EmployeesController@getDirecciones']);

});