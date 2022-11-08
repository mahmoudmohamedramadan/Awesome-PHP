<?php

require_once dirname(__FILE__, 3) . '/vendor/autoload.php';

use Amp;

Amp\Loop::run(
    function () {
        $config = Amp\Mysql\ConnectionConfig::fromString(
            "host=localhost user=root pass= db=amphp"
        );

        /**
         * @var \Amp\Mysql\Pool $pool 
         */
        $pool = Amp\Mysql\pool($config);

        /**
         * @var \Amp\Mysql\Statement $statement 
         */
        $statement = yield $pool
            ->prepare("INSERT INTO users (name, email, password)VALUES(:name, :email, :password)");

        /**
         * @var \Amp\Mysql\ResultSet $result 
         */
        yield $statement->execute(
            [
                'name' => 'Mahmoud Mohamed Ramadan',
                'email' => 'admin@gmail.com',
                'password' => md5('admin'),
            ]
        );

        echo 'user saved successfully';
    }
);
