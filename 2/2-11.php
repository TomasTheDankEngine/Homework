<?php
$name1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood ";
$name2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
$name = $name1 . $name2;
$name_arr = explode(' ', $name);
$final_arr = [];
while (count($final_arr) < 10) {
    array_push($final_arr, $name_arr[rand(0, count($name_arr) - 1)]);
    $final_arr = array_unique($final_arr);
}

for ($i = 0; $i < count($final_arr); $i++) {
    echo $final_arr[$i] . ' ';
}
