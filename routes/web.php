<?php

use Illuminate\Support\Facades\Route;


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
    return view('start');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard','Controller@dashboard');
    Route::middleware('manager')->group(function(){
        Route::get('/categorylist','CategoryController@index');
        Route::get('/addcategory','CategoryController@create');


        Route::post('/addcategory','CategoryController@store');

        Route::get('/editcategory/{category}','CategoryController@edit');
        Route::post('/editcategory/{category}','CategoryController@update');

        Route::post('/deletecategory/{category}','CategoryController@destroy');

//----Product
        Route::get('/productlist','ProductController@index');

        Route::post('/productBycategory','ProductController@productByCategory');

//edit
        Route::get('/editproduct/{product}','ProductController@edit');
        Route::post('/editproduct/{product}','ProductController@update');

//create
        Route::get('/addproduct','ProductController@create');
        Route::post('/addproduct','ProductController@store');

        Route::get('/deleteproduct/{product}','ProductController@destroy');


    });

    Route::middleware('admin')->group(function(){
        //----Users
        Route::get('/users','UserController@index');
        //add
        Route::get('/adduser','UserController@create');
        Route::post('/addusers','UserController@store');
        //edit
        Route::get('/edituser/{user}','UserController@edit');


        //filtr
        Route::post('/userRole','UserController@userRole');


    });
    Route::get('/profile/{user}','UserController@edit');
    Route::post('/edituser/{user}','UserController@update');
});





//login
Route::get('/login','AuthController@login');
Route::post('/login','AuthController@authenticate');
Route::get('/logout','AuthController@logout');

