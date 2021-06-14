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
        <a href="./index.php" class="anav">Home</a>
        <a href="./accounts.php" class="anav">Accounts overview</a>
        <a href="./deposit.php" class="anav">Deposit funds</a>
        <a href="./withdraw.php" class="anav">Withdraw funds</a>
    </nav>
    <!-- nav end -->
    <!-- New account creation -->
    <h2>Create new account</h2>
    <form action="submit" name="newAcc" method="POST">
        <div class="inputs">
            <span>Name</span>
            <input type="text" name="name[]"><br>
            <span>Surname</span>
            <input type="text" name="surname[]"><br>
            <span>Account number</span>
            <input type="text" name="accNo[]"><br>
            <span>Personal ID number</span>
            <input type="text" name="pId[]"><br>
        </div>
        <div>
            <button>Create account</button>
        </div>
    </form>
    <!-- New account creation end -->
</body>

</html>

<?php
// $accountsList = [];
$name = $_POST['name[]'];
$surname = $_POST['surname'];
$accNo = $_POST['accNo'];
$pId = $_POST['pId'];
