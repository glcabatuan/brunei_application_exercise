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

Route::get('/error', function () {
    echo "Error";
});

Route::get('/answers', function () {
   return view('child');
});

Route::get('/samp', function () {
   echo 'alright';
});

/*Problems Solutions */
/*Problem#1*/
Route::get('/Prob1/{num}','ComputationController@Prob1')->middleware('single.int');


/*Problem#2*/
Route::get('/Prob2/{num}', 'ComputationController@Prob2')->middleware('single.int');

/*Problem#3*/
Route::get('/Prob3/{word}','ComputationController@Prob3');

/*Problem#4*/
Route::get('/Prob4/{int1}/{int2}', 'ComputationController@Prob4')->middleware('double.int');

/*Problem#5*/
Route::get('/Prob5/{int1}/{int2}', 'ComputationController@Prob5')->middleware('double.int');









