<?php
$name = 'Leonardo';
$surname = 'DaVincio';
$letters = substr($name, (strlen($name) - 3), 3) . substr($surname, (strlen($surname) - 3), 3);
echo $letters;