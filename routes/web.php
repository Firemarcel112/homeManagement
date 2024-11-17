<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::group([
	'controller' => HomeController::class,
], function(): void
{
	Route::get('', 'index')
		->name('home');
});

