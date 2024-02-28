<?php

use App\Http\Controllers\remote;

Route::get('/', [remote::class, 'index']);
Route::post('/send-email', [remote::class, 'sendEmail']);
