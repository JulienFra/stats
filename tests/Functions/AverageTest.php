<?php

use Julienfra\Stats\Functions\Average;

test('Test de la moyenne avec des nombres positifs', function () {
    $list = [10, 15, 14, 16, 20];
    expect(Average::calculate($list))->toBe(15.0);
});

test('Test de la moyenne avec des nombres négatifs', function () {
    $list = [-5, -10, -15, -20];
    expect(Average::calculate($list))->toBe(-12.5);
});

test('Test de la moyenne avec un seul nombre', function () {
    $list = [42];
    expect(Average::calculate($list))->toBe(42.0);
});

test('Test de la moyenne avec un tableau vide ', function () {
    $list = [];
    expect(function () use ($list) {
        Average::calculate($list);
    })->toThrow(\InvalidArgumentException::class, 'Division by zero');
});
