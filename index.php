<?php

//  Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.
$str = "css html javascript php";
$res_str = explode(' ', $str);
print_r($res_str);
