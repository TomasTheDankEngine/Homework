<?php require DIR.'views/top.php' ?>
<?php require __DIR__ . '/menu.php'; ?>

<div>
    <h2>Create new account</h2>
</div>

<form action="<?= URL ?>create-acc" method="post">
    <label for="name">Name</label>
    <input type="text" name="name">

    <label for="surname">Surname</label>
    <input type="text" name="surname">

    <label for="pId">Personal ID</label>
    <input type="text" name="pId">

    <button>Create new account</button>

    <div>
        <a href="<?= URL ?>">Back</a>
    </div>
</form>

<?php require DIR.'views/bottom.php' ?>