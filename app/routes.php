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

Route::get('/', function()
{
	return View::make('inici');
});


Route::get('/serveis', function()
{
	return View::make('serveis');
});

Route::get('/serveis.php', function()
{
	return View::make('serveis');
});

Route::get('/servei_info', function()
{
	return View::make('servei_info');
});

/*
Route::get('users', function (){

	$users = User::all();

	return View::make('users')->with('users', $users);
});
*/
Route::get('/index', 'MiClase@paginaPrincipal');