<?php

use Illuminate\Support\Facades\Route;
use Weidner\Goutte\GoutteFacade;

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

$namespace = 'App\Http\Controllers';
Route::group(
    ['namespace' => $namespace, 'prefix'=>'', 'middleware' => ['web']],
    function() {
        Route::get('', 'HomeController@Home')->name('Home');
        Route::get('products', 'ProductController@Products')->name('Products');
    }
);
