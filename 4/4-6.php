<h2>*** 4-6:</h2>
<?php
$nums1 = [];
$nums2 = [];
while (count($nums1) <= 100 && count($nums2) <= 100) {
    if (count($nums1) <= 100) {
        array_push($nums1, rand(100, 999));
        $nums1 = array_unique($nums1);
    }
    if (count($nums2) <= 100) {
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