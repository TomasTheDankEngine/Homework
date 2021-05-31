<?php
$pirmas = rand(1000, 9999);
$antras = rand(1000, 9999);
$trecias = rand(1000, 9999);
$ketvirtas = rand(1000, 9999);
$penktas = rand(1000, 9999);
$sestas = rand(1000, 9999);
echo "Random numbers: <br> $pirmas <br> $antras <br> $trecias <br> $ketvirtas <br> $penktas <br> $sestas <br>";
$largest = $pirmas;
$smallest = $pirmas;
if ($antras > $largest) {
    $largest = $antras;
}
if ($trecias > $largest) {
    $largest = $trecias;
}
if ($ketvirtas > $largest) {
    $largest = $ketvirtas;
}
if ($penktas > $largest) {
    $largest = $penktas;
}
if ($sestas > $largest) {
    $largest = $sestas;
}
if ($antras < $smallest) {
    $smallest = $antras;
}
if ($trecias < $smallest) {
    $smallest = $trecias;
}
if ($ketvirtas < $smallest) {
    $smallest = $ketvirtas;
}
if ($penktas < $smallest) {
    $smallest = $penktas;
}
if ($sestas < $smallest) {
    $smallest = $sestas;
}

$a_sortednums = $largest;
$b_sortednums = $smallest;
$c_sortednums = $smallest;
$d_sortednums = $smallest;
$e_sortednums = $smallest;
$f_sortednums = $smallest;
//--------------------
if ($pirmas < $a_sortednums && $pirmas > $c_sortednums && $pirmas != $largest && $pirmas != $smallest) {
    $b_sortednums = $pirmas;
}
if ($antras < $a_sortednums && $antras > $c_sortednums && $antras != $largest && $antras != $smallest) {
    $b_sortednums = $antras;
}
if ($trecias < $a_sortednums && $trecias > $c_sortednums && $trecias != $largest && $trecias != $smallest) {
    $b_sortednums = $trecias;
}
if ($ketvirtas < $a_sortednums && $ketvirtas > $c_sortednums && $ketvirtas != $largest && $ketvirtas != $smallest) {
    $b_sortednums = $ketvirtas;
}
if ($penktas < $a_sortednums && $penktas > $c_sortednums && $penktas != $largest && $penktas != $smallest) {
    $b_sortednums = $penktas;
}
if ($sestas < $a_sortednums && $sestas > $c_sortednums && $sestas != $largest && $sestas != $smallest) {
    $b_sortednums = $sestas;
}
//-----------------------
if ($pirmas < $b_sortednums && $pirmas > $d_sortednums && $pirmas != $largest && $pirmas != $smallest) {
    $c_sortednums = $pirmas;
}
if ($antras < $b_sortednums && $antras > $d_sortednums && $antras != $largest && $antras != $smallest) {
    $c_sortednums = $antras;
}
if ($trecias < $b_sortednums && $trecias > $d_sortednums && $trecias != $largest && $trecias != $smallest) {
    $c_sortednums = $trecias;
}
if ($ketvirtas < $b_sortednums && $ketvirtas > $d_sortednums && $ketvirtas != $largest && $ketvirtas != $smallest) {
    $c_sortednums = $ketvirtas;
}
if ($penktas < $b_sortednums && $penktas > $d_sortednums && $penktas != $largest && $penktas != $smallest) {
    $c_sortednums = $penktas;
}
if ($sestas < $b_sortednums && $sestas > $d_sortednums && $sestas != $largest && $sestas != $smallest) {
    $c_sortednums = $sestas;
}
//-------------------------
if ($pirmas < $c_sortednums && $pirmas > $e_sortednums && $pirmas != $largest && $pirmas != $smallest) {
    $d_sortednums = $pirmas;
}
if ($antras < $c_sortednums && $antras > $e_sortednums && $antras != $largest && $antras != $smallest) {
    $d_sortednums = $antras;
}
if ($trecias < $c_sortednums && $trecias > $e_sortednums && $trecias != $largest && $trecias != $smallest) {
    $d_sortednums = $trecias;
}
if ($ketvirtas < $c_sortednums && $ketvirtas > $e_sortednums && $ketvirtas != $largest && $ketvirtas != $smallest) {
    $d_sortednums = $ketvirtas;
}
if ($penktas < $c_sortednums && $penktas > $e_sortednums && $penktas != $largest && $penktas != $smallest) {
    $d_sortednums = $penktas;
}
if ($sestas < $c_sortednums && $sestas > $e_sortednums && $sestas != $largest && $sestas != $smallest) {
    $d_sortednums = $sestas;
}
//-------------------------
if ($pirmas < $d_sortednums && $pirmas > $f_sortednums && $pirmas != $largest && $pirmas != $smallest) {
    $e_sortednums = $pirmas;
}
if ($antras < $d_sortednums && $antras > $f_sortednums && $antras != $largest && $antras != $smallest) {
    $e_sortednums = $antras;
}
if ($trecias < $d_sortednums && $trecias > $f_sortednums && $trecias != $largest && $trecias != $smallest) {
    $e_sortednums = $trecias;
}
if ($ketvirtas < $d_sortednums && $ketvirtas > $f_sortednums && $ketvirtas != $largest && $ketvirtas != $smallest) {
    $e_sortednums = $ketvirtas;
}
if ($penktas < $d_sortednums && $penktas > $f_sortednums && $penktas != $largest && $penktas != $smallest) {
    $e_sortednums = $penktas;
}
if ($sestas < $d_sortednums && $sestas > $f_sortednums && $sestas != $largest && $sestas != $smallest) {
    $e_sortednums = $sestas;
}
//----------------------------

$str_nums = '<br>' . strval($a_sortednums) . '<br>' . strval($b_sortednums) . '<br>' . strval($c_sortednums) . '<br>' . strval($d_sortednums) . '<br>' . strval($e_sortednums) . '<br>' . strval($f_sortednums);
echo "Largest to lowest: $str_nums";
