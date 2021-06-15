<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Withdrawal</title>
    <link rel="stylesheet" href="./style/styles.css">
</head>
<body>
    <!-- nav start -->
    <nav class="menu-nav">
        <a href="./index.php" class="anav">Home</a>
        <a href="./newacc.php" class="anav">New account</a>
        <a href="./accounts.php" class="anav">Accounts overview</a>
        <a href="./deposit.php" class="anav">Deposit funds</a>
    </nav>
    <!-- nav end -->
    <!-- Withdraw start -->
    <h2>Withdraw from account</h2>
    <?php $id = $_GET['accNo'] ?? 0 ?>
    <form action="?action=rem&accNo=<?= $id ?>" method="post">
        <input type="text" name="amount">
        <button>Withdraw</button>
    </form>
    <!-- Withdraw end -->
</body>
</html>