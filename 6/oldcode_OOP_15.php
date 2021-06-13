<?php

// 15.1. Пусть массив $methods будет ассоциативным с ключами method1 и method2. 
// $methods = ['method1' => 'getName', 'method2' => 'getAge'];
// Выведите имя и возраст пользователя с помощью этого массива.

$methods = ['method1' => 'getName', 'method2' => 'getAge'];


class User {
    public string $name;
    public string $age;
    
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    public function getName(): string {
        return $this->name;
    }
    
    public function getAge(): string {
        return $this->age;
    }
}

$user = new User('Саша', 22);

$methods = ['method1' => 'getName', 'method2' => 'getAge'];

echo $user->{$methods['method1']}();
echo '<br>';
echo $user->{$methods['method2']}();
          
                

