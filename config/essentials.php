<?php

declare(strict_types=1);

use NunoMaduro\Essentials\Configurables\MakeAction;
use NunoMaduro\Essentials\Configurables\Unguard;

return [
    Unguard::class => true,
    MakeAction::class => false, // Disable `Essentials` Actions, we use `lorisleiva/laravel-actions`
];
