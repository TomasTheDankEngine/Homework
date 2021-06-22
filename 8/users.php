<?php

$users = [
    ['username' => 'admin', 'pass' => md5('admin')],
    ['username' => 'admin2', 'pass' => md5('admin2')],
    ['username' => 'admin3', 'pass' => md5('admin3')]
];

file_put_contents(__DIR__ . '/users.json', json_encode($users));