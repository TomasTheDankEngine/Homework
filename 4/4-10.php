<h2>*** 4-10:</h2>
<?php
$nums = [];
echo 'Array: <br>';
for ($i = 0; $i < 10; $i++) {
    if ($i < 2) {
        $nums[$i] = rand(5, 25);
    } else {
        $nums[$i] = $nums[$i - 2] + $nums[$i - 1];
    }
    echo $nums[$i] . ' ';
}