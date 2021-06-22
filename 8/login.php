<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['logout'])) {
        unset($_SESSION['approved'], $_SESSION['username']);
        redirectto('login.php');
    }
}
else {
    $users = json_decode(file_get_contents(__DIR__ . '/users.json'), 1);
    foreach ($users as $user) {
        if ($user['username'] == $_POST['username']) {
            if ($user['pass'] == md5($_POST['pass'])) {
                $_SESSION['approved'] = true;
                $_SESSION['username'] = $user['username'];
                // setMsg('Login succesfful!');
                redirectto('index.php');
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <h1>Login</h1>
    <form action="accounts" method="post">
        <input type="text" name="username">
        <input type="text" name="pass">
        <button type="submit">Login</button>
    </form>
</body>

</html>