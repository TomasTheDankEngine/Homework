<?php require DIR.'views/top.php' ?>

<form action="<?= URL ?>add/<?= $id ?>" method="post">
    <input type="text" name="amount" value="">
    <button>Deposit amount to acc. No. <?= $id ?></button>
</form>

<?php require DIR.'views/bottom.php' ?>