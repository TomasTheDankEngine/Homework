<?php
$acc = ['accNo' => newAccNo($accs), 'name' => $_GET['name'], 'surname' => $_GET['surname'], 'pId' => $_GET['pId'], 'amount' => 0];
$accs[] = $acc;
file_put_contents(__DIR__.'/accs.json', json_encode($accs));
redirectto('newacc.php');
function newAccNo($accs) {
    $accno = 'LT01';
    $accno .= rand(1000000000000000, 9999999999999999);
    foreach ($accs as $acc) {
        if ($accno == $acc) {
            return newAccNo($accs);
        }
        else {
            return $accno;
        }
    }
}