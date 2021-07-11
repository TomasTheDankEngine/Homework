<?php require DIR . 'views/top.php' ?>
<?php require __DIR__ . '/msg.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div>
        <h2>Log in</h2>
        <form action="<?= URL ?>login" method="post">
            <input type="text" name="uname">
            <input type="password" name="pass">
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>

<?php require DIR . 'views/bottom.php' ?>