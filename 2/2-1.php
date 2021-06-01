<?php
$name = 'Leonard';
$surname = 'DaVincio';
if (strlen($name) > strlen($surname)) {
    echo $surname;
} else {
    echo $name;
}