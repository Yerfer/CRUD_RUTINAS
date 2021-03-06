<?php //namespace App\Http;

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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'pro', 'namespace' => 'Pro'], function(){
    Route::resource('rutinas','RutinasController');
});

Route::group(['prefix' => 'deportista', 'namespace' => 'deportista'], function(){
    Route::resource('objetivos','ObjetivosController');
});