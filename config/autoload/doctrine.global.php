<?php

return [
    'doctrine' => [
        'connection' => [
            // default connection name
            'orm_default' => [
                'driverClass' => \Doctrine\DBAL\Driver\Mysqli\Driver::class,
                'params' => [
                    'host'     => 'localhost',
                    'port'     => '3306',
                    'user'     => 'root',
                    'password' => 'testesenha123',
                    'dbname'   => 'crud',
                ],
            ],
        ]
    ],
];