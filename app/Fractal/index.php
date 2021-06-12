<?php

require_once dirname(__FILE__, 3) . '/vendor/autoload.php';

use League\Fractal\Manager;
use League\Fractal\Resource\Collection;

$fractal = new Manager();

$users = [
    [
        'id' => '1',
        'name' => 'Mahmoud Mohamed Ramadan',
        'email' => 'admin@gmail.com',
        'email_verified' => true,
        'password' => 'admin111',
    ],
    [
        'id' => '2',
        'name' => 'Ali Osama El-Sayed',
        'email' => 'user1@gmail.com',
        'email_verified' => false,
        'password' => 'user222',
    ]
];

/* Pass this array (collection) into a resource, which will also have a "Transformer"
 This "Transformer" can be a callback or a new instance of a Transformer object
 We type hint for array, because each item in the $books var is an array
 
 for more info read...https://fractal.thephpleague.com/glossary/ */
$resource = new Collection($users, function (array $user) {
    return [
        'id'      => (int) $user['id'],
        'name'   => $user['name'],
        'private'  => [
            'email'  => $user['email'],
            'email_verified'  => $user['email_verified'],
            'password' => $user['password'],
        ],
    ];
});

$array = $fractal->createData($resource)
    ->toArray();

// print_r($array);

echo $fractal->createData($resource)
    ->toJson();
