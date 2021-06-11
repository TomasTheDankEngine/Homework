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
        <form action="http://localhost/1-php/Homework/7/7-6/" method="get">
            <button>GET</button>
        </form>
    </div>
    <div>
        <form action="http://localhost/1-php/Homework/7/7-6/" method="post">
            <button>POST</button>
        </form>
    </div>
</body>

</html>
<style>
    body {
        display: block;
    }
    button {
        margin: 15px
    }
</style>
<?php
if (isset($_GET)) {
    echo '<style>
    body {
        background-color: green;
    }
    </style>';
}
if (isset($_POST)) {
    echo '<style>
    body {
        background-color: yellow;
    }
    </style>';
}