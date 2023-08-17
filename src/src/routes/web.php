<?php

use Patel\Product\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('test', [ProductController::class,'index']);