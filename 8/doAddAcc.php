<?php
$acc = ['accNo' => 55555, 'name' => $_REQUEST['name'], 'surname' => $_REQUEST['surname'], 'pId' => $_REQUEST['pId'], 'amount' => 0];
$accs[] = $acc;
file_put_contents(__DIR__ . '/accs.json', json_encode($accs));



redirectto('newacc.php');
