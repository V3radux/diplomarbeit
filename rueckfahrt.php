<?php

$list = [
    [
        'start_station' => 'Grieskirchen Bezirksgericht',
        'start_time' => '11:57',
        'end_station' => 'Waizenkirchen Bahnhof (Vorplatz)',
        'end_time' => '12:19',
        'lines_used' => '692'
    ],
    [
        'start_station' => 'Grieskirchen Bezirksgericht',
        'start_time' => '13:52',
        'end_station' => 'Waizenkirchen Bahnhof (Vorplatz)',
        'end_time' => '14:14',
        'lines_used' => '692'
    ],
    [
        'start_station' => 'Grieskirchen-Gallspach Bahnhof',
        'start_time' => '15:27',
        'end_station' => 'Waizenkirchen Bahnhof',
        'end_time' => '16:00',
        'lines_used' => 'R5978, R8126'
    ],
    [
        'start_station' => 'Grieskirchen Bezirksgericht',
        'start_time' => '16:39',
        'end_station' => 'Waizenkirchen Bahnhof (Vorplatz)',
        'end_time' => '17:00',
        'lines_used' => '692'
    ],
    [
        'start_station' => 'Grieskirchen Bezirksgericht',
        'start_time' => '17:39',
        'end_station' => 'Waizenkirchen Bahnhof (Vorplatz)',
        'end_time' => '18:00',
        'lines_used' => '692'
    ]
];



header('Content-Type: application/json');
echo json_encode($list);
