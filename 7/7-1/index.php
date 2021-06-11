<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="./">Link 1</a>
    <a href="?color=1">Link 2</a>
</body>

</html>
<style>
    a {
        display: block;
        color: white;
    }

    a:visited {
        color: white;
    }

    a:hover {
        color: #ffaa44;
        opacity: 0.6;
        transition: 1s;
    }

    body {
        background-color: black;
        color: white;
        display: inline-block;
    }
</style>

<?php
if ($_GET['color'] == '1') {
    echo '<style>
        body {
            background-color: red;
        }
    </style>';
}
