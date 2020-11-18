<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/paper class', function () {
    return view('paperclass');
});

Route::get('/admin login', function () {
    return view('admin_login');
});

Route::get('/admin pannel', function () {
    return view('admin_pannel');
});

Route::post('/files','DocumentController@store');
Route::get('/files','DocumentController@index');
Route::get('/files/{id}','DocumentController@show');



/*Route::get('/admin_pannel', 'DocumentController@index'
$data=>App\Documents::all();
return view('admin_pannel')->with ('files',$data);
);*/



