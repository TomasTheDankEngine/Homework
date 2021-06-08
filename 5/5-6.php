<h2>*** 5-6:</h2>
<?php
$mas = array_fill(0, 30, '');
$indexes = [];
while (count($indexes) < 30) {
    $indexes[] = rand(1, 1000000);
    array_unique($indexes);
}
foreach ($indexes as $key => $value) {
    $mas[$key] = ['user_id' => $indexes[$key], 'place_in_row' => rand(0, 100)];
}

foreach ($mas as $val) {
    usort($val, function($a, $b) {
        return $a <=> $b;
    });
}
print_r($mas);
echo '<br><br>';
arsort($mas);
print_r($mas);