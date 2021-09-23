<?php
function random_numbers_gen($min_range, $max_range, $n_times)
{
    $total_numbers = [];
    do {
        $actual_numbers = rand($min_range, $max_range);
        if (!in_array($actual_numbers, $total_numbers)) {
            $total_numbers[] = $actual_numbers;
        }
    } while (count($total_numbers) < $n_times);

    return $total_numbers;
};
