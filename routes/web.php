<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormSubmissionController;

Route::get('/', function () {
    return view('index');  // Ensure this is the correct view
});

Route::post('/submit-form', [FormSubmissionController::class, 'submitForm'])->name('submit.form');
