<?php

$host = '127.0.0.1';
$db   = 'testbase';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $options);

$fruit = [
    ['Kiwi', 1, rand(10, 150)],
    ['Orange', 1, rand(50, 300)],
    ['Melon', 2, rand(500, 8000)],
    ['Watermelon', 2, rand(1000, 10000)],
    ['Apple', 2, rand(50, 350)],
    ['Banana', 1, rand(50, 200)]
];
$number = rand(0, count($fruit) - 1);

// INSERT INTO table_name (column1, column2, column3,...)
// VALUES (value1, value2, value3,...)

$sql = "INSERT INTO fruit (`name`, `type`, `weight`)
VALUES ('".$fruit[$number][0]."', '".$fruit[$number][1]."', '".$fruit[$number][2]."')";
$pdo->query($sql);


$sql = "SELECT id, `name`, `type`, `weight`
FROM fruit
WHERE `type` = 1
ORDER BY `name`";

$stmt = $pdo->query($sql);
while ($row = $stmt->fetch())
{
    echo $row['id'] . ' ' . $row['name'] . ' ' . $row['type'] . ' ' . $row['weight'] . '<br>***~~~***<br>';
}


// UPDATE table_name
// SET column1=value, column2=value2,...
// WHERE some_column=some_value 

$sql = "UPDATE fruit
SET weight = 111
WHERE id = 27
";
$pdo->query($sql);

// DELETE FROM table_name
// WHERE some_column = some_value

$sql = "DELETE FROM fruit
WHERE id = 27";
$pdo->query($sql);