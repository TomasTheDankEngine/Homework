<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit</title>
    <link rel="stylesheet" href="./style/styles.css">
</head>
<body>
    <!-- nav start -->
    <nav class="menu-nav">
        <?php include __DIR__ . '/menu.php' ?>
    </nav>
    <!-- nav end -->
    <!-- Deposit start -->
    <h2>Deposit to account</h2>
    <?php $id = $_GET['accNo'] ?? 0 ?>
    <?php echo "To account No.: $id<br><br>"?>
    <form action="?action=add&accNo=<?=$id?>" method="post">
        <input type="text" name="amount">
        <button>Deposit to account</button>
    </form>
    <!-- Deposit end -->
</body>

</html>