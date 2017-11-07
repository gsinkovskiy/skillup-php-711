<?php
$a = [];
$a[1] = 'Mon';
$a[2] = 'Tue';
$a[3] = 'Wed';
$a[4] = 'Thu';

$arr = [1, 2, 3, 4, 5];
foreach ($arr as $elem) {
    if ($elem === 3)
        continue;
    else
        echo $elem;
}
