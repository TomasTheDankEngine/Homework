<?php
$id = $_GET['accNo'] ?? 0;
foreach ($accs as &$acc) {
    if ($acc['accNo'] == $id) {
        $acc['amount']+= (int) $_POST['amount'];
        file_put_contents(__DIR__.'/accs.json', json_encode($accs));
        redirectto('newacc.php');
    }
}