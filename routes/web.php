<?php

use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [ResumeController::class, "index"])->name("resume.index");
Route::get("/cv/download", [ResumeController::class, "download"])->name("resume.download");
// Route::get("cv/pdf", [ResumeController::class]);

