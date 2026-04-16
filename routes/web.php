<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PortofolioController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\CompanyProfileController;

