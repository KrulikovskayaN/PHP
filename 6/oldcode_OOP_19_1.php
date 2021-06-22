<?php

// 19.1. Реализуйте класс Employee, который будет наследовать от класса User. 
// Пусть новый класс добавляет свойство зарплата (salary), а также геттеры и сеттеры к нему.

class User {
    private string $name;
    private int $age;
    
    public function getName(): string {
        return $this->name;
    }
    
    public function setName(string $name): void {
        $this->name = $name;
    }
    
    public function getAge(): string {
        return $this->age;
    }
    
    public function setAge(int $age): void {
        $this->age = $age;
    }
}    
    
class Employee extends User {
    private int $salary;
    
    public function getSalary(): int {
        return $this->salary;
    }
    
    public function setSalary(int $salary): void {
        $this->salary = $salary;
    }  
}

$employee = new Employee;

$employee->setSalary(1000);
$employee->setName('Сашко');
$employee->setAge(25);

echo $employee->getSalary();
echo '<br>';
echo $employee->getName();
echo '<br>';
echo $employee->getAge();
          
        
                    
