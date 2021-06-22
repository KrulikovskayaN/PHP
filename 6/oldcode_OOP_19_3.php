<?php

// 19.3. Сделайте класс Programmer, который будет наследовать от класса Employee.
// Пусть новый класс имеет свойство langs, в котором будет хранится массив языков, 
// которыми владеет программист. Сделайте также геттер и сеттер для этого свойства.

class Employee {
    private int $salary;
    
    public function getSalary(): int {
        return $this->salary;
    }
    
    public function setSalary(int $salary): int {
         $this->salary = $salary;
    }
}    
             
class Programmer extends Employee {
    private array $langs = ['php', 'js'];
    
    public function setLangs(array $langs): void {
        $this->langs = $langs;
    }
    
    public function getLangs(): array {
        return $this->langs;
    }
}

$programmer = new Programmer;
echo print_r($programmer->getLangs()) . '<br>';
            
