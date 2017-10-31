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
    return view('welcome');
});

Route::get('/portfolio/js/weather', function() {
  
  // This works - supplying values directly
  // return view('js-weather.index', ['default' => '81001']);

  // Supply values as variables
  // $default = '88901';
  // return view('js-weather.index', ['default' => $default]);

  // Shortcut with compact
  $default = '60007';
  return view('js-weather.index', compact('default'));

});