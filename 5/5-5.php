<h2>*** 5-5:</h2>
<?php
$arr = array_fill(0, 30, [
    $user_id => '',
    $place_in_row => ''
]);
foreach ($arr as $key => $element) {
    foreach ($arr[$key] as $key => $element) {
        $element[$key] = rand(0, 100);
    }
}