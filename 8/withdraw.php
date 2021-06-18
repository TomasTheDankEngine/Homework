<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Withdrawal</title>
    <link rel="stylesheet" href="./style/styles.css">
</head>
<body>
    <!-- nav start -->
    <nav class="menu-nav">
    <?php include __DIR__ . '/menu.php' ?>
    </nav>
    <!-- nav end -->
    <!-- Withdraw start -->
    <h2>Withdraw from account</h2>
    <?php $id = $_GET['accNo'] ?? 0 ?>
    <?php echo "From account No.: $id<br><br>"?>
    <form action="?action=rem&accNo=<?=$id?>" method="post">
        <input type="text" name="amount">
        <button>Withdraw</button>
    </form>
    <!-- Withdraw end -->
</body>
</html>