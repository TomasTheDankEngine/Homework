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
        <?php include __DIR__ . '/menu.php' ?>
        <?php include __DIR__ . '/msg.php' ?>
    </nav>
    <!-- nav end -->
    <!-- Accounts list start -->
    <h2>Accounts list</h2>
    <ul>
        <?php
        usort($accs, function ($a, $b) {
            return $a['surname'] <=> $b['surname'];
        });
        if ($accs == null) {
            echo '<h3>No accounts created!</h3>';
        } ?>
        <?php if ($accs != null)  foreach ($accs as $acc) : ?>
            <li>
                Account No. <?= $acc['accNo'] ?> Balance: <?= $acc['amount'] . ' EUR' ?> Account holder: <?= $acc['name'] . ' ' . $acc['surname'] . ' ID: ' . $acc['pId'] ?>

                <a href="?action=add&accNo=<?= $acc['accNo'] ?>" class="btnl">Deposit</a>

                <a href="?action=rem&accNo=<?= $acc['accNo'] ?>" class="btnl">Withdraw</a>

                <form action="?action=delete&accNo=<?= $acc['accNo'] ?>" method="post">
                    <button type="submit">Delete account</button>
                </form>
            </li>
        <?php endforeach ?>
    </ul>
    <!-- Accounts list end -->
</body>

</html>