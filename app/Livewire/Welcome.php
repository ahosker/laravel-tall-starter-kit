<?php

declare(strict_types=1);

namespace App\Livewire;

use Livewire\Component;

final class Welcome extends Component
{
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        return view('livewire.welcome');
    }
}
