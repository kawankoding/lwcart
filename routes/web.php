<?php

Route::livewire('/', 'home')->name('home');
Route::livewire('/products', 'product-index')->name('products');
Route::livewire('/cart', 'cart-index')->name('cart');
