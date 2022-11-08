<?php

use ReflectionClass as GlobalReflectionClass;

class UserClass
{
    public $name;
    public $email;
    protected $password;

    public function show()
    {
        return [
            'Name' => $this->name,
            'Email' => $this->email,
            'Password' => $this->password,
        ];
    }

    public function store()
    {
        $this->name = 'Mahmoud Mohamed Ramadan';
        $this->email = 'admin@gmail.com';
        $this->password = md5('admin');
    }

    public function update()
    {
        $this->name = 'Mahmoud Ramadan';
        $this->email = 'admin@developer.com';
        $this->password = md5('developer');
    }
}

$userObject               = new UserClass();
$reflectionClassObject    = new GlobalReflectionClass($userObject);
$reflectionMethodsObject  = new ReflectionMethod($userObject, 'show');

echo '<pre>';

// This object allows you to get all info about passed method
// by passing a classObject in first param and methodName in string in second param
print_r($reflectionMethodsObject);

// `getMethods` method to get all methods inside object which you pass
print_r($reflectionClassObject->getMethods());

// `getProperties` method to get all properties inside object which you pass
print_r($reflectionClassObject->getProperties());
