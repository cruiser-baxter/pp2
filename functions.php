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

function removeDups(array $nums) {
    $noDups = array();

    foreach ($nums as $num) {
        if (!in_array($num, $noDups)) {
            array_push($noDups, $num);
        }
    }
    foreach ($noDups as $num) {
        echo $num."<br>";
    }
}