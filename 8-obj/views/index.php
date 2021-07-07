<?php require DIR.'views/top.php' ?>

<ul>
    <?php foreach($accs as $acc) : ?>
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

<?php require DIR.'views/bottom.php' ?>