<?php

use Green\Posts\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/posts', [PostController::class, 'index']);
