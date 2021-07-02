<?php

// require __DIR__ . '/bootstrap.php';

// if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//     if (isset($_GET['logout'])) {
//         unset($_SESSION['approved'], $_SESSION['username']);
//         redirectto('login.php');
//         // header('Location: http://localhost/1-php/Homework/8/login.php');
//         // die;
//     }
// }
//  else {
    $users = json_decode(file_get_contents(__DIR__ . '/users.json'), 1);
    foreach ($users as $user) {
        if ($user['username'] == $_POST['username']) {
            if ($user['pass'] == md5($_POST['pass'])) {
                $_SESSION['approved'] = true;
                $_SESSION['username'] = $user['username'];
                setMsg('Login successful!');
                redirectto('homePage.php');
                // header('Location: http://localhost/1-php/Homework/8/accounts.php');
                // die;
            }
        }
    }
// }
