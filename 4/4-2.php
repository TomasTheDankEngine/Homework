<?php
$nums = [];
echo 'Array: ';
for ($i = 0; $i < 30; $i++) {
    array_push($nums, rand(5, 25));
    echo $nums[$i] . ' ';
}
$nums_genesis = $nums;
echo '<br>Array length is ' . count($nums);
?>
<!-- ************************************ -->
<h2>*** 4-a:</h2>
<?php
$count = 0;
foreach ($nums as $num) {
    !($num > 10) ?: $count++;
}
echo "Amount of nums greater than 10: $count";
?>
<!-- ************************************ -->
<h2>*** 4-b:</h2>
<?php
$largest = 0;
foreach ($nums as $num) {
    !($num > $largest) ?: $largest = $num;
}
echo "Largest num: $largest";
?>
<!-- ************************************ -->
<h2>*** 4-c:</h2>
<?php
$sum = 0;
foreach ($nums as $num) {
    !($num % 2 == 0) ?: $sum += $num;
}
echo "Sum of even numbers within array: $sum";
?>
<!-- ************************************ -->
<h2>*** 4-d:</h2>
<?php
$newnums = [];
echo 'Array: <br>';
foreach ($nums as $num) {
    echo $num . ' ';
}
echo '<br> New array: <br>';
for ($i = 0; $i < count($nums); $i++) {
    array_push($newnums, ($nums[$i] - $i));
    echo $newnums[$i] . ' ';
}
echo '<br> Delta: <br>';
for ($i = 0; $i < 30; $i++) {
    echo $nums[$i] - $newnums[$i] . ' ';
}
?>
<!-- ************************************ -->
<h2>*** 4-e:</h2>
<?php
for ($i = 0; $i < 10; $i++) {
    array_push($nums, rand(5, 25));
}
echo 'Array length is now ' . count($nums);
?>
<!-- ************************************ -->
<h2>*** 4-f:</h2>
<?php
$evens = [];
$odds = [];
for ($i = 0; $i < count($nums); $i++) {
    if ($nums[$i] % 2 == 0) {
        array_push($evens, $nums[$i]);
    } else {
        array_push($odds, $nums[$i]);
    }
}
echo 'Array: ';
for ($i = 0; $i < count($nums); $i++) {
    echo $nums[$i] . ' ';
}
echo '<br>Evens: ';
for ($i = 0; $i < count($evens); $i++) {
    echo $evens[$i] . ' ';
}
echo '<br>Odds: ';
for ($i = 0; $i < count($odds); $i++) {
    echo $odds[$i] . ' ';
}
?>
<!-- ************************************ -->
<h2>*** 4-g:</h2>
<?php
$nums = $nums_genesis;
echo 'Array: ';
for ($i = 0; $i < count($nums); $i++) {
    echo $nums[$i] . ' ';
}
echo '<br>Larger than 15 to 0: ';
for ($i = 0; $i < count($nums); $i++) {
    if ($nums[$i] > 15) {
        $nums[$i] = 0;
    }
    echo $nums[$i] . ' ';
}
?>
<!-- ************************************ -->
<h2>*** 4-h:</h2>
<?php
echo 'Array: ';
for ($i = 0; $i < count($nums); $i++) {
    echo $nums[$i] . ' ';
}
echo '<br>Index of first element larger than 10: ';
for ($i = 0; $i < count($nums); $i++) {
    if ($nums[$i] > 10) {
        echo $i;
        break;
    }
}
?>
<!-- ************************************ -->
<h2>*** 4-i:</h2>
<?php
echo 'Array: <br>';
for ($i = 0; $i < count($nums); $i++) {
    echo $nums[$i] . ' ';
}
echo '<br>Same array with even index elements removed: <br>';
for ($i = 0; $i < count($nums); $i++) {
    if ($i % 2 == 0) {
        unset($nums[$i]);
    }
}
foreach ($nums as $num) {
    echo $num . ' ';
}