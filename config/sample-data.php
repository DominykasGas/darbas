<?php

return [
    'conferences' => [
        [
            'id' => 1,
            'title' => 'Web programavimo konferencija',
            'description' => 'Konferencija apie  Laravel projektus.',
            'speakers' => 'Antanas, Jonė',
            'date' => '2026-05-20',
            'time' => '10:00',
            'address' => 'Vilniaus Tech , Vilnius',
        ],
        [
            'id' => 2,
            'title' => 'Dirbtinio intelekto konferencija',
            'description' => 'Konferencija apie dirbtinį intelektą.',
            'speakers' => 'Emilija, Marius',
            'date' => '2026-06-05',
            'time' => '12:30',
            'address' => 'Kauno  centras, Kaunas',
        ],
        [
            'id' => 3,
            'title' => 'Kibernetinio saugumo konferencija',
            'description' => 'Renginys apie kibernetinį saugumą.',
            'speakers' => 'Antanaitis',
            'date' => '2025-03-15',
            'time' => '09:00',
            'address' => 'VVK, Vinius',
        ],
    ],

    'users' => [
        ['id' => 1, 'first_name' => 'Jonas', 'last_name' => 'Jonaitis', 'email' => 'jonas@example.com'],
        ['id' => 2, 'first_name' => 'Aiste', 'last_name' => 'Petraite', 'email' => 'aiste@example.com'],
        ['id' => 3, 'first_name' => 'Mantas', 'last_name' => 'Kazlauskas', 'email' => 'mantas@example.com'],
    ],

    'registrations' => [
        ['first_name' => 'Jonas', 'last_name' => 'Jonaitis', 'email' => 'jonas@example.com'],
        ['first_name' => 'Aiste', 'last_name' => 'Petraite', 'email' => 'aiste@example.com'],
    ],
];
