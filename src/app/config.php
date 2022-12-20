<?php

return[

    'database' => [
        'name' => 'alejandria',
        'username' => 'administrador',
        'password' => '1234',
        'connection' => 'mysql:host=localhost',
        'options' => [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT => true    
        ]
    ],
    'email' => [
        'smtp_server'=>'smtp.gmail.com',
        'smtp_port'=>'587',
        'smtp_security'=>'tls',
        'username'=>'alexdracma@gmail.com',
        'password'=>'fwegbeormdvopqsh'
    ]
];