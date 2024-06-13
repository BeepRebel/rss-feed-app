<?php

use App\Http\Controllers\RssFeedController;

Route::get('/rssfeed', [RssFeedController::class, 'index']);

