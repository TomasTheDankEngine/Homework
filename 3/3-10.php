<!-- *** 3-9-1 *** -->
<h2> *** 3-9-1 (small bonk): </h2>
<?php
for ($i = 1; $i < 6; $i++) {
    $depth = 0;
    $count = 0;
    while ($depth <= 85) {
        $depth += rand(5, 20);
        if ($depth >= 85) {
            $depth = 85;
            break;
        }
        $count++;
    }
    echo $i . 'st nail hit count: ' . $count . '<br>';
}
?>
<!-- *** 3-9-2 *** -->
<h2> *** 3-9-2 (big bonk): </h2>
<?php
for ($i = 1; $i < 6; $i++) {
    $depth = 0;
    $count = 0;
    while ($depth <= 85) {
        if (rand(0, 100) > 50) {
            $count++;
            continue;
        }
        $depth += rand(20, 30);
        if ($depth >= 85) {
            $depth = 85;
            break;
        }
        $count++;
    }
    echo $i . 'st nail hit count: ' . $count . '<br>';
}