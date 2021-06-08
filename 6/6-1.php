<h2>*** 6-1:</h2>
<?php
function tohead($txt) {
    echo '<h1>' . $txt . '</h1>';
}
$text = 'dlibidibidi';
tohead($text);
echo '<br><br>';
// OR

function tohead2($txt) {
    $a = '<h1>' . $txt . '</h1>';
    return $a;
}
echo tohead2($text);