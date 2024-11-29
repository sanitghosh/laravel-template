<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/category', function () {
    return view('category');
});
Route::get('/plans', function () {
    return view('plans');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/myaccount', function () {
    return view('account');
});
Route::get('/product', function () {
    return view('product');
});