<h2>*** 4-4:</h2>
<?php
$letters = [];
for ($i = 0; $i < 200; $i++) {
    $letters[$i] = chr(rand(65, 68));
}
sort($letters, SORT_STRING);
foreach ($letters as $l) {
    echo $l . '<br>';
}