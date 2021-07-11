<?php require DIR.'views/top.php' ?>
<?php require __DIR__.'/menu.php' ?>
<?php require __DIR__.'/msg.php' ?>

<div>
    <h4>Deposit to:</h4>
    <div>Customer ID: <?= $acc['id'] ?> </div>
    <div>Customer personal ID: <?= $acc['pId'] ?> </div>
    <div>Name: <?= $acc['name'] ?> </div>
    <div>Surname: <?= $acc['surname'] ?></div>
    <div>Account No.: <?= $acc['accNo'] ?></div>
    <div>Balance: <?= $acc['amount'] ?></div>
</div>

<form action="<?= URL ?>add/<?=$id?>" method="post">
    <input type="text" name="amount">
    <button type="submit">Deposit amount</button>
</form>

<?php require DIR.'views/bottom.php' ?>