<?php
$hrs = rand(0, 24);
$min = rand(0, 59);
$sec = rand(0, 59);
$str_hrs = '0';
$str_min = '0';
$str_sec = '0';
$extra_sec = rand(0, 300);
// echo "Time is $hrs:$min:$sec.";
if ($hrs == 0) {
    $str_hrs = '00';
}
if ($min == 0) {
    $str_min = '00';
}
if ($sec == 0) {
    $str_sec = '00';
}
if ($hrs < 10 && $hrs != 0) {
    $str_hrs .= strval($hrs);
}
if ($hrs > 10 && $hrs != 0) {
    $str_hrs = strval($hrs);
}
if ($min < 10 && $min != 0) {
    $str_min .= strval($min);
}
if ($min > 10 && $min != 0) {
    $str_min = strval($min);
}
if ($sec < 10 && $sec != 0) {
    $str_sec .= strval($sec);
}
if ($sec > 10 && $sec != 0) {
    $str_sec = strval($sec);
}
echo "Time is $str_hrs:$str_min:$str_sec.";
$sec += $extra_sec;
if ($sec > 59) {
}
