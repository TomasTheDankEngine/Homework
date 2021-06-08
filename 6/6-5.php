<h2>*** 6-5:</h2>
<?php
$numbers = [];
foreach (range(1, 100) as $_) {
    $numbers[] = rand(33, 77);
}
print_r($numbers);
usort($numbers, function($a, $b){
    return countnums($a) <=> countnums($b);
});
echo '<br><br>';
print_r($numbers);
function countnums($num)
{
    $counter = 0;
    $divisor = 2;
    if (gettype($num) != "integer") {
        return 'Only whole numbers can be used!';
    }
    // echo "Number is: $num <br><br>";
    while ($divisor < $num) {
        if ($num % $divisor === 0) {
            // echo "Divisor is: $divisor.<br>";
            $counter++;
        }
        $divisor++;
    }
    return "Count is: $counter.";
}