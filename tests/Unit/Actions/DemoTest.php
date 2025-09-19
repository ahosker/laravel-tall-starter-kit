<?php

declare(strict_types=1);

use App\Actions\Demo;
use Illuminate\Console\Command;

test('demo action returns success response', function () {
    $demo = new Demo();
    $result = $demo->handle();

    expect($result)
        ->toBeObject()
        ->toHaveProperty('success', true)
        ->toHaveProperty('data')
        ->and($result->data)->toBeArray();
});

test('demo action logic returns expected structure', function () {
    $demo = new Demo();

    $reflection = new ReflectionClass($demo);
    $method = $reflection->getMethod('actionLogic');
    $method->setAccessible(true);

    $result = $method->invoke($demo);

    expect($result)
        ->toBeObject()
        ->toHaveProperty('success', true)
        ->toHaveProperty('data')
        ->and($result->data)->toBeArray();
});

test('demo action authorize method returns true', function () {
    $demo = new Demo();
    
    expect($demo->authorize())->toBeTrue();
});

test('demo action rules method returns empty array', function () {
    $demo = new Demo();
    
    expect($demo->rules())->toBeArray()->toBeEmpty();
});

test('demo action has correct command signature', function () {
    $demo = new Demo();
    
    expect($demo->commandSignature)->toBe('Demo:Demo');
});

test('demo action has correct command description', function () {
    $demo = new Demo();
    
    expect($demo->commandDescription)->toBe('Demo Description');
});

test('demo action handle with attributes', function () {
    $demo = new Demo();
    $attributes = ['test' => 'value'];
    $result = $demo->handle($attributes);

    expect($result)
        ->toBeObject()
        ->toHaveProperty('success', true)
        ->toHaveProperty('data')
        ->and($result->data)->toBeArray();
});

test('demo action as command returns success', function () {
    $demo = new Demo();
    $command = Mockery::mock(Command::class);
    $command->shouldReceive('info')->once()->with('Action: Demo Done!');

    $result = $demo->asCommand($command);

    expect($result)->toBe(0);
});
