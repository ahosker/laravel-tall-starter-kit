<?php

declare(strict_types=1);

return [
    NunoMaduro\Essentials\Configurables\Unguard::class => true,
    NunoMaduro\Essentials\Configurables\MakeAction::class => false, // Disable `Essentials` Actions, we use `lorisleiva/laravel-actions`
];
