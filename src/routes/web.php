<?php

use VinothMallow\Greeting\Greeting;

Route::get('/greet/{name}', function($name) {
    return view('Greeting::greeting', ['name' => $name]);
});