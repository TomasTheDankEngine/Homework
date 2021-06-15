<?php
$acc = ['accNo' => newAccNo($accs), 'name' => $_REQUEST['name'], 'surname' => $_REQUEST['surname'], 'pId' => $_REQUEST['pId'], 'amount' => 0];
$accs[] = $acc;
file_put_contents(__DIR__ . '/accs.json', json_encode($accs));

function newAccNo($accs)
{
    $accno = 'LT01';
    $accno .= rand(1000000000000000, 9999999999999999);
    foreach ($accs as $acc) {
        if ($accno == $acc) {
            return newAccNo($accs);
        }
        return $accno;
    }
}

redirectto('newacc.php');
