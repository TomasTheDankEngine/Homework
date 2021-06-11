<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="http://localhost/1-php/Homework/7/7-3/" method="get">
            <span>Enter color:</span>
            <input type="text" name="col" class="form-item">
            <div>
        <button type="submit" class="form-item">Apply</button>
    </div>
        </form>
    </div>
</body>

</html>
<style>
    body {
        background-color: black;
        color: white;
        display: inline-block;
    }
</style>

<?php
if (isset($_GET['col'])) {
    $color = $_GET['col'];
    echo "<style>
        body{
            background-color: #$color;
        }
        </style>";
}
