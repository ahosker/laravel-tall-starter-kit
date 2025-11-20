<?php

declare(strict_types=1);

namespace App\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class Welcome extends Component
{
    public function render(): View|Factory
    {
        return view('livewire.welcome');
    }
}
