<?php

require __DIR__ . '/bootstrap.php';

// if (!isset($_SESSION['approved'])) {
//     header('Location: http://localhost/1-php/Homework/8/login.php');
//     die;
// }

if (!isset($_GET['action']) && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__ . '/login.php';
}
//---------------------------------------------------------------------------
 elseif ($_GET['action'] == 'accounts' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__ . '/accounts.php';
}
//---------------------------------------------------------------------------

 elseif ($_GET['action'] == 'add' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__ . '/deposit.php';
}
//---------------------------------------------------------------------------
 elseif ($_GET['action'] == 'add' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__ . '/doAdd.php';
}

//---------------------------------------------------------------------------
 elseif ($_GET['action'] == 'rem' && $_SERVER['REQUEST_METHOD'] == 'GET') {
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
//---------------------------------------------------------------------------
elseif ($_GET['action'] == 'doLog' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__ . '/doLog.php';
}
//---------------------------------------------------------------------------
elseif ($_GET['action'] == 'doLogOut' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__ . '/doLogOut.php';
}