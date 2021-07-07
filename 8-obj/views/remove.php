<?php require DIR.'views/top.php' ?>

<form action="<?= URL ?>rem/<?= $id ?>" method="post">
    <input type="text" name="amount" value="">
    <button>Withdraw amount</button>
</form>

<?php require DIR.'views/bottom.php' ?>