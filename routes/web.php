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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//    return "Hello World";
//});
//
//
//Route::get('/demo', function () {
//    return view('product');
//});
//
//
//Route::get('/bitm', function () {
//    //return "Hello bitm";
//     return view('demo');
//});
//
//Route::get('/basis/bitm/php65', function () {
////   return view('basis.bitm.hello');
//
////    return [
////      'name' => 'Mosiur Rahman',
////      'city' => 'Dhaka',
////      'country' => 'Bangladesh'
////    ];
//
//    return [
//        '0'=>[
//            'name' => 'Mosiur Rahman',
//            'city' => 'Dhaka',
//            'country' => 'Bangladesh'
//        ],
//        '1' => [
//            'name' => 'Robin Hood Panday',
//            'city' => 'KushtiA',
//            'country' => 'U.K'
//        ],
//        '2'=>[
//            'name' => 'Khaleq Uddin',
//            'city' => 'Sonir Akhra',
//            'country' => 'Noakhali'
//        ]
//    ];
//});

Route::get('/', 'WelcomeController@index');
Route::get('/about', 'WelcomeController@about');



Route::get('/basis/bitm/hello', 'WelcomeController@hello');











