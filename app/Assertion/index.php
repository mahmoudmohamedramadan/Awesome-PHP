<?php

require_once dirname(__FILE__, 3) . '/vendor/autoload.php';

use Assert\Assertion;
use Assert\AssertionFailedException;

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $userData = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'img' => $_FILES['img'],
            'active' => NULL,
        ];

        if (isset($_POST['active'])) {
            $userData['active'] = $_POST['active'];
        }

        echo "<ul>";
        foreach ($userData as $key => $value) {
            if (Assertion::notNull($key)) {
                echo "<li>The {$key} should NOT be NULL</li>";
            }
        }
        echo "</ul>";

        Assertion::betweenLength(
            $userData['password'],
            10,
            20,
            'The password should be between 10 and 20 characters'
        );

        Assertion::file($userData['img'], 'The picture should be correct file');
    }
} catch (AssertionFailedException $e) {
    echo $e->getMessage();
}
