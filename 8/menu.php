<div>
    <a href="?action=addacc" class="anav">New account</a>
    <a href="?action=accounts" class="anav">Accounts overview</a>
    <a href="http://localhost/1-php/Homework/8/login.php" class="anav">Logout</a>
    <?php if (isset($_SESSION['approved'])) : ?>
    <!-- <a href="http://localhost/1-php/Homework/8/login.php?logout">Logout</a> -->
</div>
<?php endif;