<?php

use Illuminate\Support\Facades\Route;

Route::get('dump-server', fn () => view('laduse::dump'));
