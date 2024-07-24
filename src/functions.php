<?php

function task1(array $arr, int $number)
{
    $first = -1;
    $second = -1;
    foreach ($arr as $key => $value) {
        if ($value == $number && $first == -1) {
            $first = $key;
        }
        if ($value == $number) {
            $second = $key;
        }
    }
    return implode(',', $arr = [0 => $first, 1 => $second]);
};
