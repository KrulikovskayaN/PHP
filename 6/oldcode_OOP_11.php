<?php

// 11.1. Сделайте класс City (город), в котором будут следующие свойства: name (название города), 
// population (количество населения).

class City {
    public string $name;
    public int $population;
    
    public function __construct(string $name, int $population) {
        $this->name = $name;
        $this->population = $population;
    }    
}

// 11.2. Создайте 5 объектов класса City, заполните их данными и запишите в массив.

$cities = [ new City('New York', 8175133),
            new City('Los Angeles', 3792621),
            new City('Chicago', 2695598),
            new City('Phoenix', 1445632), 
            new City('Dallas', 1197816) ];

// 11.3. Переберите созданный вами массив с городами циклом и выведите города и их население на экран.

foreach ($cities as $city) {
    echo $city->name . ' - ' . $city->population . '<br>';       
} 
       
            
                 
    
