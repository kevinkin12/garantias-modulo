<?php

use App\Http\Controllers\WarrantyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('warranties.index');
});

Route::resource('warranties', WarrantyController::class);