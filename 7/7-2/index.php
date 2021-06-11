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
  if(isset($_GET['color'])){
    $color = $_GET['color'];
        echo "<style>
        body{
            background-color: #$color;
        }
        a{
            display: block;
            color: black;
        }
        </style>";
      }