<h2>*** 6-2:</h2>
<?php
function tohead2($txt, $num)
{
    if ($num >= 1 && $num <= 6) {
        $a = "<h$num>" . $txt . "</h$num>";
        return $a;
    }
    else {
        return 'Invalid header num!';
    }
}
$text = 'dlibidibidi';
$num = 5;
echo tohead2($text, $num);
