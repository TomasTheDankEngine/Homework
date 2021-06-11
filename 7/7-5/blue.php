<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <a href="./blue.php?pageSet=true" name="blue">blue</a>
</body>
</html>
<?php
if (isset($_GET['pageSet'])) {
    header('Location: ./red.php');
    die;
}