<?php require DIR.'views/top.php' ?>
<?php require __DIR__ . '/menu.php'; ?>
<?php require __DIR__.'/msg.php' ?>

<div>
    <h4>Withdraw from:</h4>
    <div>Customer ID: <?= $acc['id'] ?> </div>
    <div>Customer personal ID: <?= $acc['pId'] ?> </div>
    <div>Name: <?= $acc['name'] ?> </div>
    <div>Surname: <?= $acc['surname'] ?></div>
    <div>Account No.: <?= $acc['accNo'] ?></div>
    <div>Balance: <?= $acc['amount'] ?></div>
</div>

<form action="<?= URL ?>rem/<?= $id ?>" method="post">
    <input type="text" name="amount" value="">
    <button>Withdraw amount</button>
</form>

<?php require DIR.'views/bottom.php' ?>