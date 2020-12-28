<?php

$list = [
    [
        'start_station' => 'Waizenkirchen Bahnhof (Vorplatz)',
        'start_time' => '07:00',
        'end_station' => 'Grieskirchen Schulzentrum',
        'end_time' => '07:44'
    ],
    [
        'start_station' => 'Aegidi',
        'start_time' => '06:00',
        'number' => 5,
        'boolean' => false
    ]
];



header('Content-Type: application/json');
echo json_encode($list);
