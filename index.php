<?php

//ex.1:
for ($num = 1; $num <= 10; $num++) {
    echo $num . '<br/>';
}

echo '<hr />';

$cnt = 10;
while ($cnt < 30) {
    $cnt++;
    if ($cnt % 2 !== 0) {
        echo $cnt . '<br/>';
    }
}

//ex.2:
/*
function fillInEmptySpaces() {
    $value = 1;
    $arr[] = $value;
    do {
        $value++;
        $arr[] = $value;
    } while ($value < 10);
    return $arr;
}
print_r(fillInEmptySpaces());
*/

//ex.3:
//$arr = ['green'=>'зелений', 'red'=>'червоний', 'blue'=>'блакитний'];
//
//function sortByLanguage($array) {
//    $en = [];
//    $ua = [];
//    $total_arr = [];
//    foreach ($array as $key => $value) {
//        array_push($en, $key);
//        array_push($ua, $value);
//        $total_arr = [$en, $ua];
//    }
//    return $total_arr;
//}
//print_r(sortByLanguage($arr));

//ex.4:
function randomNumberGenerator() {
    $arr = [];
    for ($i = 0; $i < 50; $i++) {
        $arr[] = rand(0, 100);
    }

    return array_values(array_filter($arr, function ($value) {
        return $value < 69;
    }));
}

print_r(randomNumberGenerator());
