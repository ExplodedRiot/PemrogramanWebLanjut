<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class web extends Controller
{
    Route::get('/', [PageController::class. 'index']);

Route::get('/', [PageController::class, 'about']);

Route::get('articles/{id}', [PageController::class, 'articles']);
}

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleControllers
