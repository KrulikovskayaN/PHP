<?php

// 7.1. Сделайте класс Employee, в котором будут следующие публичные свойства - name (имя), age (возраст), salary (зарплата). 
// Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта.

class Employee {
    public string $name;
    public int $age;
    public int $salary;
    
    public function __construct(string $name, int $age, int $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}

// 7.2. Создайте объект класса Employee с именем 'Вася', возрастом 25, зарплатой 1000.

$employee = new Employee('Вася', 25, 1000);

// 7.3. Создайте объект класса Employee с именем 'Петя', возрастом 30, зарплатой 2000.

$employee1 = new Employee('Петя', 30, 2000);

// 7.4. Выведите на экран сумму зарплат Васи и Пети.

echo $employee->salary + $employee1->salary;
   
