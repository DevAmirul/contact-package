<?php

use Amirul\Contact\https\controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('contact', [ContactController::class, 'view'])->name('contact');
Route::post('contact', [ContactController::class, 'send']);

