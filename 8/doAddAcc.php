<?php
if ($_POST['name'] == null || $_POST['surname'] == null || $_POST['pId'] == null)  {
    setMsg('Fields cannot be left empty!');
    redirecttoAction('addacc');
}
$acc = ['accNo' => newAccNo($accs), 'name' => $_POST['name'], 'surname' => $_POST['surname'], 'pId' => $_POST['pId'], 'amount' => 0];
print_r($acc);
$accs[] = $acc;
file_put_contents(__DIR__ . '/accs.json', json_encode($accs));

redirectto('?action=accounts');
