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
    return view('welcome');
});

Route::get('/biodata', function () {
    $data1=[
        'nama'=>'Iman Januar',
        'lahir'=>' bandung 18 01 03',
        'hobi'=>' tidur',
        'jk'=>' laki-laki',
        'agama'=>' islam & atheis',
        'alamat'=>' abdinegara blok f',
        'telp'=>' 082121260400',
        'email'=>' imanjanuar44@gmail.com'
    ];
return view('biodata',$data1);

});
