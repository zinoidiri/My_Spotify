<?php

function find_file($string)
{
    $i = 0;
    do {
        if ($i == 1) {
            $string = './' . $string;
        } else if ($i == 2) {
            $string = './.' . $string;
            $i = 0;
        }
        $i++;
    } while (!file_exists($string));

    return $string;
}