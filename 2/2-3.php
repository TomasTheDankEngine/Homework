<?php
$name = 'Leonardo';
$surname = 'DaVincio';
$initials = substr($name, 0, 1) . substr($surname, 0, 1);
echo $initials;