<div>
    <a href="./?action=addacc" class="anav">New account</a>
    <a href="./?action=accounts" class="anav">Accounts overview</a>
    <?php if (!isset($_SESSION['approved'])) : ?>
        <a href="http://localhost/1-php/Homework/8/" class="anav">Login</a>
    <?php else : ?>
        <a href="http://localhost/1-php/Homework/8/?action=doLogOut">Logout</a>
</div>
<?php endif;
