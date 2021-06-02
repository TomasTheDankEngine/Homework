<?php
$color = '#000000';
for ($i = 0; $i < 21; $i++) {
    for ($j = 0; $j < 21; $j++) {
        $color = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        if (($i == 0 && $j == 10) || ($i == 20 && $j == 10)) {
            echo "<span style=\"color: $color\">*</span>";
            continue;
        }
        else if ($i == 20 && $j == 10) {
            echo "<span style=\"color: $color\">*</span>";
            continue;
        }
        else if ($j + $i == 10 || $j - $i == 10 && $i != 0) {
            echo "<span style=\"color: $color\">*</span>";
        }
        else if ($i - $j == 10 || ($i + $j) / 3 == 10 && $i != 0) {
            echo "<span style=\"color: $color\">*</span>";
        }
        else {echo "<span style=\"opacity: 0\">*</span>";}
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
        letter-spacing: 13px;
        font-size: 20px;
    }
</style>