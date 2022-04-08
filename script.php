<?php
    // Snack 1
    // Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    // Olimpia Milano - Cantù | 55-60

    $giornata_di_campionato = [
        [
            'casa' => [
                'squadra' => 'Olimpia Milano',
                'punteggio' => 55
            ],
            'ospiti' => [
                'squadra' => 'Cantù',
                'punteggio' => 60
            ]
        ],
        [
            'casa' => [
                'squadra' => 'Olimpia Milano',
                'punteggio' => 55
            ],
            'ospiti' => [
                'squadra' => 'Cantù',
                'punteggio' => 60
            ]
        ],
        [
            'casa' => [
                'squadra' => 'Olimpia Milano',
                'punteggio' => 55
            ],
            'ospiti' => [
                'squadra' => 'Cantù',
                'punteggio' => 60
            ]
        ],
        [
            'casa' => [
                'squadra' => 'Olimpia Milano',
                'punteggio' => 55
            ],
            'ospiti' => [
                'squadra' => 'Cantù',
                'punteggio' => 60
            ]
        ]
    ];

    // Snack 4
    // Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

    $array_numeri = range(0, 100);

    shuffle($array_numeri);
    $array_numeri_random = array_slice($array_numeri, 7, 16);
