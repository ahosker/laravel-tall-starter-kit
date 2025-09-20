<?php

declare(strict_types=1);

namespace App\Actions;

use Illuminate\Console\Command;
use Lorisleiva\Actions\Concerns\AsAction;
use Lorisleiva\Actions\Concerns\WithAttributes;

// Note: This only exists so `lorisleiva/laravel-actions` is happy. Delete, once you create your own action.

final class Demo
{
    use AsAction;
    use WithAttributes;

    public string $commandSignature = 'Demo:Demo';
    // execute action as `php artisan Demo:Demo`

    public string $commandDescription = 'Demo Description';

    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [];
    }

    /**
     * @param  array<string, mixed>  $attributes
     */
    public function handle(array $attributes = []): object
    {
        $this->fill($attributes);
        $this->validateAttributes();

        return (object) $this->actionLogic();
    }

    // Console entrypoint
    public function asCommand(Command $command): int
    {
        $this->handle();

        // Return Response Confirmation
        $command->info('Action: Demo Done!');

        return 0;
    }

    // Core business logic.
    private function actionLogic(): object
    {
        return (object) [
            'success' => true,
            'data' => [],
        ];
    }
}
