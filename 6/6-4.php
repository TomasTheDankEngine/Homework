<h2>*** 6-4:</h2>
<?php
$number = 12;
function countnums($num)
{
    $counter = 0;
    $divisor = 2;
    if (gettype($num) != "integer") {
        return 'Only whole numbers can be used!';
    }
    echo "Number is: $num <br><br>";
    while ($divisor < $num) {
        if ($num % $divisor === 0) {
            echo "Divisor is: $divisor.<br>";
            $counter++;
        }
        $divisor++;
    }
    return "Count is: $counter.";
}
echo countnums($number);
