<?php

use Julienfra\Stats\Functions\Variance;

test('Test de la variance avec des nombres positifs', function () {
    $list = [10, 15, 14, 16, 20];
    expect(Variance::calculate($list))->toBe(10.4);
});

test('Test de la variance avec des nombres négatifs', function () {
    $list = [-5, -10, -15, -20];
    expect(Variance::calculate($list))->toBe(31.25);
});

test('Test de la variance avec un seul nombre', function () {
    $list = [42];
    expect(function () use ($list) {
        Variance::calculate($list);
    })->toThrow(\InvalidArgumentException::class, 'Cannot calculate variance with less than 2 numbers');
});

test('Test de la variance avec moins de 2 nombres', function () {
    $list = [42];
    expect(function () use ($list) {
        Variance::calculate($list);
    })->toThrow(\InvalidArgumentException::class, 'Cannot calculate variance with less than 2 numbers');
});