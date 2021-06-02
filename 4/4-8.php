<h2>*** 4-8:</h2>
<?php
$nums1 = [];
$nums2 = [];
while (count($nums2) <= 99) {
    if (count($nums1) <= 99) {
        array_push($nums1, rand(100, 999));
        $nums1 = array_unique($nums1);
        continue;
    }
    if (count($nums2) <= 99) {
        array_push($nums2, rand(100, 999));
        $nums2 = array_unique($nums2);
    }
}
echo 'Array 1: <br>';
foreach ($nums1 as $num) {
    echo $num . ' ';
}
echo '<br>Array 2: <br>';
foreach ($nums2 as $num) {
    echo $num . ' ';
}
$nums = [];
for ($i = 0; $i < count($nums1); $i++) {
    for ($j = 0; $j < count($nums1); $j++) {
        if ($nums1[$i] == $nums2[$j]) {
            array_push($nums, $nums2[$j]);
        }
    }
}
echo '<br>Stats:<br>Array 1 count: ' . count($nums1) . '<br>Array 2 count: ' . count($nums2) . '<br>Combo array count: ' . count($nums) . '<br>';
foreach ($nums as $num) {
    echo $num . ' ';
}
