<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account overview</title>
    <link rel="stylesheet" href="./style/styles.css">
</head>

<body>
    <!-- nav start -->
    <nav class="menu-nav">
        <a href="./index.php" class="anav">Home</a>
        <a href="./newacc.php" class="anav">New account</a>
        <a href="./deposit.php" class="anav">Deposit funds</a>
        <a href="./withdraw.php" class="anav">Withdraw funds</a>
    </nav>
    <!-- nav end -->
    <!-- Accounts list start -->
    <h2>Accounts list</h2>
    <ul>
        <?php if ($accs == null) {
            echo '<br><span>No accounts created!</span><br>';
        } ?>
        <?php foreach ($accs as $acc) : ?>
            <li>
                Account No. <?= $acc['accNo'] ?> Balance: <?= $acc['amount'] ?> Account holder: <?= $acc['name'] . ' ' . $acc['surname'] ?>
                <form action="?action=delete&accNo=<?= $acc['accNo'] ?>" method="post">
                    <button type="submit">Delete account</button>
            </li>
        <?php endforeach ?>
    </ul>
    <!-- Accounts list end -->
</body>

</html>