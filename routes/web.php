<?php

declare(strict_types=1);

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Welcome::class);
