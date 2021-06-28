<?php

$num0 = is_integer($_GET['num0']) ? $_GET['num0'] : null;
$num1 = is_integer($_GET['num1']) ? $_GET['num1'] : null;
$num2 = is_integer($_GET['num2']) ? $_GET['num2'] : null;

$num0 = $_GET['num0'] ?? null;
$num1 = $_GET['num1'] ?? null;
$num2 = $_GET['num2'] ?? null;

$nums[] = $num0;
$nums[] = $num1;
$nums[] = $num2;

// foreach ($nums as $key=>$num) {
//     if (!is_int($num)) {
//         unset($nums[$key]);
//     }
// }


file_put_contents(__DIR__ . '/nums.json', json_encode($nums));

if (!file_exists(__DIR__ . '/nums.json')) {
    file_put_contents(__DIR__ . '/nums.json', json_encode([]));
}
$nums = json_decode(file_get_contents(__DIR__ . '/nums.json'), 1);

?>

<form method="get">
<input type="text" name="num0">
<input type="text" name="num1">
<input type="text" name="num2">
<button type="submit">GO</button>
<button type="reset">RESET</button>
</form>

<h3>Result:</h3>
<div>
<?php
       rsort($nums) ?>
    <?php print_r($nums) ?>
</div>