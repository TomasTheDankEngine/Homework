<?php
if (!isset($_SESSION['approved'])) {
    redirectto('');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New account</title>
    <link rel="stylesheet" href="./style/styles.css">
</head>

<body>
    <!-- nav start -->
    <nav class="menu-nav">
        <?php include __DIR__ . '/menu.php' ?>
        <?php include __DIR__ . '/msg.php' ?>
    </nav>
    <!-- nav end -->
    <!-- New account creation -->
    <h2>Create new account</h2>

    <form action="http://localhost/1-php/Homework/8/?action=addacc" method="post">
        <div class="inputs">
            <span>Name</span>
            <input type="text" name="name"><br>
            <span>Surname</span>
            <input type="text" name="surname"><br>
            <span>Personal ID number</span>
            <input type="text" name="pId"><br>
        </div>
        <div>
            <button type="submit">Create account</button>
        </div>
    </form>
    <!-- New account creation end -->
</body>

</html>