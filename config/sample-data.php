<?php

return [
    'conferences' => [
        [
            'id' => 1,
            'title' => 'Web Development Conference',
            'description' => 'Conference about modern web technologies and Laravel projects.',
            'speakers' => 'John Smith, Laura Brown',
            'date' => '2026-05-20',
            'time' => '10:00',
            'address' => 'Vilnius Tech Park, Vilnius',
        ],
        [
            'id' => 2,
            'title' => 'AI and Business Conference',
            'description' => 'Conference about artificial intelligence usage in business.',
            'speakers' => 'Emily White, Mark Green',
            'date' => '2026-06-05',
            'time' => '12:30',
            'address' => 'Kaunas Innovation Center, Kaunas',
        ],
        [
            'id' => 3,
            'title' => 'Cyber Security Meetup',
            'description' => 'Event about cyber security, data protection and safe systems.',
            'speakers' => 'Peter Black',
            'date' => '2025-03-15',
            'time' => '09:00',
            'address' => 'Online event',
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
