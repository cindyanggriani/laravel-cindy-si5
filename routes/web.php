<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    return "
    <h1> Halaman Home </h1>
    <a href='/about'>about</a><br>
    <a href='/profile'>profile</a>
    ";
});

Route::get('/about', function () {
    //return view('welcome');
    return "
    <h1> Halaman About </h1> 
    <a href='/'>Home</a><br>
    <a href='profile'>profile</a>
    ";
});

Route::get('/profile', function () {
    //return view('welcome');
    return "
    <h1> Halaman Profile </h1>
    <a href='/'>Home</a><br>
    <a href='/about'>about</a>
    ";
});


