<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/person',function() {
    return view('person',[
        'name' => 'Lourdes Vasquez',
        'age' => 21,
        'address' => 'La Purisima, Nabua, Camarines Sur',
        'color' => 'blue',
        'siblings' => [
        [
            'name' => 'Fatima Vasquez',
            'age' => 18
        ],
        [
            'name' => 'Cesar Vasquez',
            'age' =>  16
        ],
        
        ]
    ]);
    
});
