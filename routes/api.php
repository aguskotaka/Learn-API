<?php

use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Termwind\Components\Dd;

Route::get('/posts',[PostController::class,'index']);


