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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('main_page.blade.php', 'IndexController@main_page')->name('main_page');

Route::get('films.blade.php', 'IndexController@films')->name('filmsShow');
Route::get('film/{id}', 'IndexController@film')->name('filmShow');

Route::get('serials.blade.php', 'IndexController@serials')->name('serialsShow');
Route::get('serial/{id}', 'IndexController@serial')->name('serialShow');

Route::get('films_rating.blade.php', 'IndexController@films_rating')->name('films_rating');
Route::get('serials_rating.blade.php', 'IndexController@serials_rating')->name('serials_rating');

Route::get('news.blade.php', 'IndexController@news')->name('news');
Route::get('news/{id}', 'IndexController@information')->name('informationShow');

Route::get('contacts.blade.php', 'IndexController@contacts')->name('contacts');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



/* Route::get('/user', function()
{
  $user = new User;
  $user->username = 'philipbrown';
  $user->email = 'phil@ipbrown.com';
  $user->password = 'deadgiveaway';
  $user->password_confirmation = 'deadgiveaway';
  var_dump($user->save());
}); */