<!-- *** 3-1-1 *** -->
<?php
$stars = '';
$count = 0;
while ($count <= 400) {
    $stars .= '*';
    $count++;
}
?>
<style>
    span {
        display: inline-block;
        width: 100%;
        overflow-wrap: break-word;
    }
</style>
<h2>Task 3-1-1:</h2>
<span><?php echo $stars ?></span>

<!-- *** 3-1-2 *** -->

<?php
$stars = '';
for ($i = 0; $i < 8; $i++) {
    $count = 0;
    while ($count < 50) {
        $stars .= '*';
        $count++;
    }
    $stars .= '<br>';
}
?>
<h2>Task 3-1-2:</h2>
<span><?php echo $stars ?></span>