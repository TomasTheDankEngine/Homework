<?php require DIR . 'views/top.php' ?>

<div>
    <ul>
    <?php
    require __DIR__ . '/msg.php';
    require __DIR__ . '/menu.php';
        usort($accs, function ($a, $b) {
            return $a['surname'] <=> $b['surname'];
        });
        if ($accs == null) {
            echo '<h3>No accounts created!</h3>';
        } if ($accs != null) foreach ($accs as $acc) : ?>
            <li>
                ID: <?= $acc['id'] ?> Account No. <?= $acc['accNo'] ?> Name: <?= $acc['name'] ?> Surname: <?= $acc['surname'] ?> Personal ID: <?= $acc['pId'] ?> Balance: <?= $acc['amount'] ?> EUR
                [<a href="<?= URL ?>add/<?= $acc['id'] ?>">Deposit</a>]
                [<a href="<?= URL ?>rem/<?= $acc['id'] ?>">Withdraw</a>]
                <form action="<?= URL ?>delete/<?= $acc['id'] ?>" method="post">
                    <button type="submit">Delete account</button>
                </form>
            </li>
        <?php endforeach ?>
    </ul>
</div>
<?php require DIR . 'views/bottom.php' ?>