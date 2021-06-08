<h2>*** 6-3:</h2>
<?php
$text = md5(time());
echo "String is: $text <br><br>";
function tohead($txt) {
    $a = '<h1>' . $txt . '</h1>';
    return $a;
}
$text = preg_replace('/\D/', '', $text);
echo tohead($text);


// preg_match_all('!\d+!', $text, $numbers);
// foreach ($numbers[0] as $key => $value) {
//     echo text(strval($value));
// }