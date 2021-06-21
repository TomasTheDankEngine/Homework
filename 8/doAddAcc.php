<?php
if ($_POST['name'] == null || $_POST['surname'] == null || $_POST['pId'] == null)  {
    setMsg('Fields cannot be left empty!');
    redirecttoAction('addacc');
}
if (!preg_match('/^\D/', $_POST['name']) || !preg_match('/^\D/', $_POST['surname'])) {
    setMsg('You must use latin alphabet letters!');
    redirecttoAction('addacc');
}
if (strlen($_POST['name']) < 3 || strlen($_POST['surname']) < 3) {
    setMsg('Name/surname must be at least 3 characters!');
    redirecttoAction('addacc');
}
if(!preg_match('/^[0-9]{11}$/', $_POST['pId'])){
    setMsg('Personal ID must be 11 digits!');
    redirecttoAction('addacc');
}
$acc = ['accNo' => newAccNo($accs), 'name' => $_POST['name'], 'surname' => $_POST['surname'], 'pId' => $_POST['pId'], 'amount' => 0];
print_r($acc);
$accs[] = $acc;
file_put_contents(__DIR__ . '/accs.json', json_encode($accs));

redirectto('?action=accounts');
