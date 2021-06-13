<?php

// 14.1. Сделайте класс City (город), в котором будут следующие свойства - name (название), foundation (дата основания),
// population (население). Создайте объект этого класса.
// 14.2. Пусть дана переменная $props, в которой хранится массив названий свойств класса City. Переберите этот массив
// циклом foreach и выведите на экран значения соответствующих свойств.

class City {
    public string $name;
    public int $foundation;
    public float $population;
    
    public function __construct($name, $foundation, $population) {
        $this->name = $name;
        $this->foundation = $foundation;
        $this->population = $population;
    }
    
    public function properties(array $props): void {
        foreach ($props as $value) {
            echo $this->$value . '<br>';
        }   
    }
}

$city = new City('Kyiv', 482, 2.967);

$props = ['name', 'foundation', 'population'];


$city->properties($props);


// 14.3. Скопируйте мой код класса User и массив $props. Выведите еще и имя, и отчество.

class User {
    public string $surname;
    public string $name;
    public string $patronymic;
    
    public function __construct($surname, $name, $patronymic) {
        $this->surname = $surname;
        $this->name = $name;
        $this->patronymic = $patronymic;
    }
}

$user = new User('Иванов', 'Иван', 'Иванович');

$props = ['surname', 'name', 'patronymic'];
echo $user->{$props[0]};
echo '<br>';
echo $user->{$props[1]};
echo '<br>';
echo $user->{$props[2]}; 





         
    
