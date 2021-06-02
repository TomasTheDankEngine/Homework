<h2>*** 4-5:</h2>
<?php
$letters1 = [];
$letters2 = [];
$letters3 = [];
for ($i = 0; $i < 200; $i++) {
    $letters1[$i] = chr(rand(65, 68));
    $letters2[$i] = chr(rand(65, 68));
    $letters3[$i] = chr(rand(65, 68));
    echo $letters1[$i] . ' ' . $letters2[$i] . ' ' . $letters3[$i] . ' ';
}

$lettersmix = $letters1;

echo '<br><br>';
for ($i = 0; $i < 200; $i++) {
    $lettersmix[$i] .= $letters2[$i] . $letters3[$i];
    echo $lettersmix[$i] . ' ';
}
$solovalues = 0;
for ($i = 0; $i < count($lettersmix); $i++) {
    $counter = 0;
    for ($j = 0; $j < count($lettersmix); $j++) {
        if ($lettersmix[$i] === $lettersmix[$j]) {
            $counter++;
        }
    }
    if ($counter == 1) {
        $solovalues++;
    }
}
$lettersmix_unique = array_unique($lettersmix);
echo '<br>Unique combos: ' . count($lettersmix_unique);
echo '<br>Unique values: ' . $solovalues;