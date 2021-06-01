<?php
$stars = '';
for ($i = 0; $i < 100; $i++) {
    $count = 0;
    while ($count < 100) {
        $stars .= '*';
        $count++;
    }
    $stars .= '<br>';
}
?>
<style>
    p {
        display: table-cell;
        width: 50%;
        height: 100vh;
        /* overflow: hidden; */
        position: relative;
        vertical-align: middle;
        justify-content: center;
        text-align: center;
        letter-spacing: 10px;
        font-size: 10px;
    }
</style>
<span>
    <p><?php echo $stars ?></p>
</span>