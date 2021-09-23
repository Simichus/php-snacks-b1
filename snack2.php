<?php
$students = [
    [
        'firstname' => 'Ciccio',
        'lastname' => 'Pasticcio',
        'votes' => [6, 8, 6, 9, 10, 5]
    ],
    [
        'firstname' => 'Paolo',
        'lastname' => 'Cellammare',
        'votes' => [9, 7, 8, 8, 6, 9, 4]
    ],
    [
        'firstname' => 'Ajeje',
        'lastname' => 'Brazorf',
        'votes' => [3, 4, 3, 7, 2, 5]
    ],
];


function get_media($votes)
{
    $total = 0;
    $total_votes = 0;
    foreach ($votes as $vote) {
        $total += $vote;
        $total_votes++;
    };

    return $total / $total_votes;
}
