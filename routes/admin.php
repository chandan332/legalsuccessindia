<?php

use Illuminate\Support\Facades\Route;

Route::prefix("admin")->name("admin.")->group(function () {
    Route::view("/", "admin.dashboard")->middleware("admin");
    Route::view("/login", "admin.login")->name("login");
});
