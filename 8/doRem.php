<?php
$id = $_GET['accNo'] ?? 0;
foreach ($boxes as &$box) {
    if ($box['accNo'] == $id) {
        $box['amount']-= (int) $_POST['amount'];
        file_put_contents(__DIR__.'/accs.json', json_encode($boxes));
        redirectto('withdraw.php');
    }
}