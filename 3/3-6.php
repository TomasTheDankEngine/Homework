<!-- *** 3-6-1 *** -->
<h2>*** 3-6-1:</h2>
<?php
$stop = 0;
$coins = '';
while ($stop != 1) {
    if (rand(0, 1) == 0) {
        $coins .= 'H ';
    } else {
        $coins .= 'S ';
    }
    if (preg_match('/(H)/', $coins) === 1) {
        $stop = 1;
    }
    // $stop++;
}
echo $coins;
?>
<!-- *** 3-6-2 *** -->
<h2>*** 3-6-2:</h2>
<?php
$stop = 0;
$coins = '';
while ($stop != 1) {
    if (rand(0, 1) == 0) {
        $coins .= 'H ';
    } else {
        $coins .= 'S ';
    }
    if (substr_count($coins, 'H') == 3) {
        $stop = 1;
    }
    // $stop++;
}
echo $coins;
?>
<!-- *** 3-6-3 *** -->
<h2>*** 3-6-3:</h2>
<?php
$stop = 0;
$coins = '';
while ($stop != 1) {
    if (rand(0, 1) == 0) {
        $coins .= 'H ';
    } else {
        $coins .= 'S ';
    }
    if (preg_match('/(H ){3}/', $coins) === 1) {
        $stop = 1;
    }
    // $stop++;
}
echo $coins;
?>