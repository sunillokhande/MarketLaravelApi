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
    return view('welcome');
});
/*
Route::group([
  ‘prefix’ => ‘api/v1’,
  ‘namespace’ => ‘Api’], function () {

  Route::post(‘/auth/register’, [
    ‘as’ => ‘auth.register’,
    ‘uses’ => ‘AuthController@register’
  ]);

  Route::post(‘/auth/login’, [
    ‘as’ => ‘auth.login’,
    ‘uses’ => ‘AuthController@login’
  ]);
});
*/
Route::post('/register','AuthController@register');
Route::post('/getAllTenant','TenantController@getAllTenants');
Route::post('/login','AuthController@authenticate');
Route::post('/create','AuthController@create');

Route::get('/user/{id}', 'UserController@showProfile');

//Route::get('breweries', ['middleware' => 'cors', function()
//{
//    return \Response::json(\App\Brewery::with('beers', 'geocode')->paginate(10), 200);
//}]);
/*
Route::get('/user', function () {
    return view('user.showProfile');
});
*/

