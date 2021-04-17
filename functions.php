<?php
function printArr(array $nums) {
    foreach ($nums as $num) {
        echo $num."<br>";
    }
}

function largest( array $nums) {
    $largest = 0;
    foreach ($nums as $num) {
        if ($num > $largest) {
            $largest = $num;
        }
    }

    return $largest;
}