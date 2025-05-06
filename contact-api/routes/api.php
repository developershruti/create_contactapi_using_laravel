<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContactFormController;


Route::post('contact', [ContactFormController::class, 'ContactForm']);