<?php

$list = [
    [
        'start_station' => 'Waizenkirchen Bahnhof (Vorplatz)',
        'start_time' => '07:00',
        'end_station' => 'Grieskirchen Schulzentrum',
        'end_time' => '07:44',
        'lines_used' => '692'
    ]
];



header('Content-Type: application/json');
echo json_encode($list);
