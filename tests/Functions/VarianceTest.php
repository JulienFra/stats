<?php

use Julienfra\Stats\Functions\Variance;

test('Test de la variance avec un nombre impair d\'éléments', function () {
    $list = [10, 15, 14, 16, 20];
    
    // Remplacez les valeurs attendues par les nouvelles valeurs avec la précision souhaitée
    expect(Variance::calculate($list))->toBeApproximately(10.7, 0.001); // Mettez à jour la valeur avec précision
});

test('Test de la variance avec un nombre pair d\'éléments', function () {
    $list = [10, 15, 14, 16];
    
    // Remplacez les valeurs attendues par les nouvelles valeurs avec la précision souhaitée
    expect(Variance::calculate($list))->toBeApproximately(7.9167, 0.001); // Mettez à jour la valeur avec précision
});

test('Test de la variance avec un tableau vide (doit lancer une exception)', function () {
    $list = [];
    expect(function () use ($list) {
        Variance::calculate($list);
    })->toThrow(\InvalidArgumentException::class, 'Le tableau ne peut pas être vide.');
});
