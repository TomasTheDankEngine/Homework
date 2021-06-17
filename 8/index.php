<?php
session_start();
function redirectto(string $page)
{
    header("Location: http://localhost/1-php/Homework/8/$page");
    die;
}

function newAccNo($accs)
{
    if ($accs == null) {
        $accno = 'LT01';
        $accno .= rand(1000000000000000, 9999999999999999);
        return $accno;
    }
    $accno = 'LT01';
    $accno .= rand(1000000000000000, 9999999999999999);
    foreach ($accs as $acc) {
        if ($accno == $acc['accNo']) {
            return newAccNo($accs);
        }
        return $accno;
    }
}

if (!file_exists(__DIR__ . '/accs.json')) {
    file_put_contents(__DIR__ . '/accs.json', json_encode([]));
}
$accs = json_decode(file_get_contents(__DIR__ . '/accs.json'), 1);

if (!isset($_GET['action']) && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__ . '/accounts.php';
}
//---------------------------------------------------------------------------
 elseif ($_GET['action'] == 'accounts' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__ . '/accounts.php';
}
//---------------------------------------------------------------------------
//---------------------------------------------------------------------------
 elseif ($_GET['action'] == 'deposit' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__ . '/deposit.php';
}
//---------------------------------------------------------------------------
 elseif ($_GET['action'] == 'add' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__ . '/doAdd.php';
}
//---------------------------------------------------------------------------
 elseif ($_GET['action'] == 'rem' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__ . '/rem.php';
}
//---------------------------------------------------------------------------
 elseif ($_GET['action'] == 'withdraw' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__ . '/withdraw.php';
}
//---------------------------------------------------------------------------
 elseif ($_GET['action'] == 'rem' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__ . '/doRem.php';
}
//---------------------------------------------------------------------------
 elseif ($_GET['action'] == 'addacc' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__ . '/newacc.php';
}
//---------------------------------------------------------------------------
 elseif ($_GET['action'] == 'addacc' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__ . '/doAddAcc.php';
}
//---------------------------------------------------------------------------
elseif ($_GET['action'] == 'delete' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__ . '/doDelete.php';
}
