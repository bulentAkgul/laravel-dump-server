<?php

use Illuminate\Support\Facades\Route;

Route::get('dump-server', fn () => view('dump-server::dump'));
