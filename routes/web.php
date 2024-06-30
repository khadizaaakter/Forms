<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormSubmissionController;

Route::get('/', function () {
    return view('index');  
});

Route::post('/submit-form', [FormSubmissionController::class, 'submitForm'])->name('submit.form');
