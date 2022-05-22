<?php

use Illuminate\Support\Facades\Route;


Route::name('home')->get('/', function(){

       return view ('/pages/home');
});

Route::name('about')->get('/about-us', function(){
       return view ('pages/about');
});

Route::get('/help', function(){
       return view('pages.help');
});

Route::get('/register', function(){
       return view('pages.register');
});

Route::get('/login', function(){
       return view('pages.login');
});