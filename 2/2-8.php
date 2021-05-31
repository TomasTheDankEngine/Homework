<?php
$name = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo $name . '<br>';
echo 'Episode is: ' . substr(trim(substr($name, 18)), 0, 1);
