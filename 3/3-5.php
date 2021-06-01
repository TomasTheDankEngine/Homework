<?php
$color = '#000000';
for ($i = 0; $i < 100; $i++) {
    $color = '#000000';
    for ($j = 0; $j < 100; $j++) {
        $color = '#000000';
        if ($i == 0 && $j == 0) {
            $color = '#FF0000';
        }
        if ($i != 0 && $j != 0 && $j - $i == 0) {
            $color = '#FF0000';
        }
        if ($i + $j == 99) {
            $color = '#FF0000';
        }
        echo "<span style=\"color: $color\">*</span>";
    }
    echo '<br>';
}

?>
<style>
    span {
        width: 50%;
        height: 100vh;
        vertical-align: middle;
        justify-content: center;
        text-align: center;
        letter-spacing: 7px;
        font-size: 10px;
    }
</style>