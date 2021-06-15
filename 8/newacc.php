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
    <?php $id = $_GET['accNo'] ?? 0 ?>
    <form action="?action=add-acc&accNo=<?= $id ?>" method="post">
        <div class="inputs">
            <span>Name</span>
            <input type="text" name="name"><br>
            <span>Surname</span>
            <input type="text" name="surname"><br>
            <span>Personal ID number</span>
            <input type="text" name="pId"><br>
        </div>
        <div>
            <button>Create account</button>
        </div>
    </form>
    <!-- New account creation end -->
</body>
</html>