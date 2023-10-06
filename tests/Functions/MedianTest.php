<?php

use Julienfra\Stats\Functions\Median;

test('Test de la médiane avec un nombre impair d\'éléments', function () {
    $list = [10, 15, 14, 16, 20];
    expect(Median::calculate($list))->toBe(15.0);
});

test('Test de la médiane avec un nombre pair d\'éléments', function () {
    $list = [10, 15, 14, 16];
    expect(Median::calculate($list))->toBe(14.5);
});

test('Test de la médiane avec un tableau vide (doit lancer une exception)', function () {
    $list = [];
    expect(function () use ($list) {
        Median::calculate($list);
    })->toThrow(\InvalidArgumentException::class);
});
