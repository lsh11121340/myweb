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

Route::get('base1', function () {
    return 'welcome';
});
// Route::get('getName/{name?}',['as'=>'name',function($name='xavier'){
//     echo route('name').'<br/>';
//     return 'getName as name->'.$name;
// }]);
Route::group(['prefix'=>'get'],function(){
    Route::any('name/{name?}',['as'=>'name',function($name='xavier'){
    echo route('name').'<br/>';
    return 'getName as name->'.$name;
    }]);
});

Route::any(
    'User/{id?}',
    [
        'uses'=>'UserController@getInfo',
        'as'    =>'userInfo'
    ]
)->where('id','[0-9]+');