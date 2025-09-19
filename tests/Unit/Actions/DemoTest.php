<?php

declare(strict_types=1);

use App\Actions\Demo;

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
