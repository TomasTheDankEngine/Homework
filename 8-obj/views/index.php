<?php require DIR . 'views/top.php' ?>
<div>
    <a href="<?= URL ?>create-acc">Create new account</a>
</div>
<div>
    <ul>
    <?php
    require __DIR__ . '/msg.php';
        usort($accs, function ($a, $b) {
            return $a['surname'] <=> $b['surname'];
        });
        if ($accs == null) {
            echo '<h3>No accounts created!</h3>';
        } if ($accs != null) foreach ($accs as $acc) : ?>
            <li>
                Account No. <?= $acc['id'] ?> Balance: <?= $acc['amount'] ?>
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