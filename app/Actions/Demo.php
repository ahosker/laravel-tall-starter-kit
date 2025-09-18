<?php

namespace App\Actions;

use App\Http\Requests\StoreDemoRequest;
use Illuminate\Console\Command;
use Lorisleiva\Actions\Concerns\AsAction;
use Lorisleiva\Actions\Concerns\WithAttributes;

// Note: This only exists so `lorisleiva/laravel-actions` is happy. Delete, once you create your own action.

class Demo
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

    public function rules(): array
    {
        return [];
    }
    
    public function handle(array $attributes = []): object
    {
        $this->fill($attributes);
        $this->validateAttributes();

        $response = (object) $this->actionLogic();

        return $response;
    }

    // Console entrypoint
    public function asCommand(Command $command): int
    {
        $response = $this->handle();

        // Return Response Confirmation
        $command->info('Action: Demo Done!');

        return 0;
    }

    // Core business logic.
    private function actionLogic(): object
    {
        return (object) [
            'success' => true,
            'data' => []
        ];
    }
}
