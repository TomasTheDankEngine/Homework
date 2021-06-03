<h2>*** 4-11:</h2>
<?php
$nums = [];
while (count($nums) <= 100) {
    array_push($nums, rand(0, 300));
    $nums = array_unique($nums);
}
print_r($nums);
echo '<br>' . count($nums) . '<br>';

while (ordering($nums) > 30) {
    shuffle($nums);
    ordering($nums);
}

function ordering($nums)
{
    $largest = $nums[0];
    $largestindex = 0;
    foreach ($nums as $index => $num) {
        if ($num  > $largest) {
            $largest = $num;
            $largestindex = $index;
        }
    }
    $nums[$largestindex] = $nums[50];
    $nums[50] = $largest;
    echo "<br>Largest: $largest; Index was: $largestindex<br><br>";
    print_r($nums);

    $go = true;
    while ($go == true) {
        foreach ($nums as $index => &$num) {
            $temp = -1;
            foreach ($nums as $index => &$num) {
                if ($index < 50) {
                    if ($num > $nums[$index + 1]) {
                        $temp = $num;
                        $num = $nums[$index + 1];
                        $nums[$index + 1] = $temp;
                    }
                    if ($temp == -1 && $num < $nums[50]) {
                        // $go = false;
                        $temp = -1;
                        continue;
                    }
                }
                if ($index > 50) {
                    if ($num > $nums[$index - 1]) {
                        $temp = $num;
                        $num = $nums[$index - 1];
                        $nums[$index - 1] = $temp;
                    }
                    if ($temp == -1 && $num < $nums[50]) {
                        $go = false;
                    }
                }
            }
        }
    }
    reset($nums);
    echo '<br><br>';
    print_r($nums);
    $sum1 = 0;
    $sum2 = 0;
    foreach ($nums as $index => $num) {
        if ($index < 50) {
            $sum1 += $num;
        }
        if ($index > 50) {
            $sum2 += $num;
        }
    }
    echo "<br><br>Sum 1: $sum1 <br>Sum 2: $sum2";
    echo '<br>Sums difference: ' . abs($sum1 - $sum2);
    return abs($sum1 - $sum2);
}
