<?php

session_start();


if (!file_exists(__DIR__ . '/accs.json')) {
    file_put_contents(__DIR__ . '/accs.json', json_encode([]));
}
$accs = json_decode(file_get_contents(__DIR__ . '/accs.json'), 1);

function redirectto(string $page)
{
    header("Location: http://localhost/1-php/Homework/8/$page");
    die;
}

function redirecttoAction ($action, $id = 0) {
    if ($id) {
        header("Location: http://localhost/1-php/Homework/8/?action=$action&accNo=$id");
    }
    else {
        header("Location: http://localhost/1-php/Homework/8/?action=$action");
    }
    die;
}

function validPId($pId) {
    $pId = trim($pId);
    if(!preg_match('/^[0-9]{11}$/', $pId)){
        return false;
    }
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

function setMsg(string $msg)
{
    $_SESSION['msg'] = $msg;
}

function getMsg () {
    if (!isset($_SESSION['msg'])) {
        return false;
    }
    $msg = $_SESSION['msg'];
    unset($_SESSION['msg']);
    return $msg;
}