<?php
session_start();
function redirectto($page)
{
    header("Location: http://localhost/1-php/Homework/8/$page");
    die;
}


if (!file_exists(__DIR__.'/accs.json')) {
    file_put_contents(__DIR__.'/accs.json', json_encode([]));
}
$accs = json_decode( file_get_contents(__DIR__.'/accs.json'), 1);

// 1. saraso atvaizdavimas GET
if (!isset($_GET['action']) && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/home.php';
}

// 2. Pridejimo atvaizdavimas GET
elseif ($_GET['action'] == 'add' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/newacc.php';
}

// 3. Pridejimo vykdymas POST
elseif ($_GET['action'] == 'add' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doAdd.php';
}

// 4. Isemimo atvaizdavimas GET
elseif ($_GET['action'] == 'rem' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/rem.php';
}

// 5. Isemimo vykdymas POST
elseif ($_GET['action'] == 'rem' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doRem.php';
}

// 6. Naujo acc pridejimo atvaizdavimas GET
elseif ($_GET['action'] == 'add-acc' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/addAcc.php';
}

// 7. Naujo acc pridejimo vykdymas POST
elseif ($_GET['action'] == 'add-acc' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doAddAcc.php';
}

// 8. acc trynimo vykdymas POST
elseif ($_GET['action'] == 'delete' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doDelete.php';
}
