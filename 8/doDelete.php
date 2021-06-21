<?php
$id = $_GET['accNo'] ?? 0;
foreach ($accs as $index => $acc) {
    if ($acc['accNo'] == $id) {
        if ($acc['amount'] != 0) {
            setMsg('Cannot delete a non-empty account!');
            redirecttoAction('accounts');
            break;
        } else if ($acc['amount'] === 0) {
            unset($accs[$index]);
            file_put_contents(__DIR__ . '/accs.json', json_encode($accs));
            redirectto('?action=accounts');
        }
    }
}
