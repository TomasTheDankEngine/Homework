<?php
$id = $_GET['accNo'] ?? 0;
foreach ($accs as $index => $acc) {
    if ($acc['accNo'] == $id) {
        unset($accs[$index]);
        file_put_contents(__DIR__.'/accs.json', json_encode($accs));
        redirectto('?action=accounts');
    }
}