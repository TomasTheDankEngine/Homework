<h2>4-1 (unique):</h2>
<?php
$nums = [];
for ($i = 0; $i < 30; $i++) {
    array_push($nums, rand(5, 25));
}
$nums = array_unique($nums, SORT_NUMERIC);
$nums_str = implode(' ', $nums);
echo $nums_str;
?>
<h2>4-1 (fully random):</h2>
<?php
$nums = [];
for ($i = 0; $i < 30; $i++) {
    array_push($nums, rand(5, 25));
    echo $nums[$i] . ' ';
}
