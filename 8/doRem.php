<?php
$id = $_GET['accNo'] ?? 0;
foreach ($accs as &$acc) {
    if ($acc['accNo'] == $id) {
        if ($acc['amount'] < (int) $_POST['amount']) {
            setMsg('Insufficient funds!');
            redirecttoAction('rem', $id);
        }
        $acc['amount'] -= (int) $_POST['amount'];
        file_put_contents(__DIR__.'/accs.json', json_encode($accs));
        setMsg($_POST['amount'].' EUR withdrawn.');
        redirectto('?action=accounts');
    }
}