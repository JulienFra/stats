<?php

use Julienfra\Stats\Functions\StandardDeviation;

test('Test de l\'écart type avec des nombres positifs', function () {
    $list = [10, 15, 14, 16, 20];
    $result = StandardDeviation::calculate($list);
    
    $expected = 3.2240; // La valeur approximative attendue
    $precision = 0.001; // Vous pouvez augmenter la précision souhaitée
    
    expect($result)->toBeGreaterThanOrEqual($expected - $precision);
    expect($result)->toBeLessThanOrEqual($expected + $precision);
});

test('Test de l\'écart type avec des nombres négatifs', function () {
    $list = [-5, -10, -15, -20];
    $result = StandardDeviation::calculate($list);
    
    $expected = 5.5902; // La valeur approximative attendue
    $precision = 0.001; // Vous pouvez augmenter la précision souhaitée
    
    expect($result)->toBeGreaterThanOrEqual($expected - $precision);
    expect($result)->toBeLessThanOrEqual($expected + $precision);
});

test('Test de l\'écart type avec un seul nombre', function () {
    $list = [42];
    expect(StandardDeviation::calculate($list))->toBe(0.0);
});

test('Test de l\'écart type avec un tableau vide', function () {
    $list = [];
    expect(function () use ($list) {
        StandardDeviation::calculate($list);
    })->toThrow(\InvalidArgumentException::class, 'Le tableau ne peut pas être vide.');
});

