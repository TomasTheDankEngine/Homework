<?php if(isset($_SESSION['approved'])) : ?>

<div>
    <a href="<?= URL ?>">Home</a>
    <a href="<?= URL ?>create-acc/">Create account</a>
    <a href="<?=URL?>logout">Log out</a>
</div>

<?php endif ?>