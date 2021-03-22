<?php

/* 
  8.1. Сделайте класс Employee, в котором будут следующие private свойства: name (имя), age (возраст) и salary (зарплата).
  8.2. Сделайте геттеры и сеттеры для всех свойств класса Employee.
  8.3. Дополните класс Employee приватным методом isAgeCorrect, который будет проверять возраст на корректность (от 1 до
  100 лет). Этот метод должен использоваться в сеттере setAge перед установкой нового возраста (если возраст не корректный-
  он не должен меняться).
  8.4. Пусть зарплата наших работников хранится в долларах. Сделайте так, чтобы геттер getSalary добавлял в конец числа с
  зарплатой значок доллара. Говоря другими словами в свойстве salary зарплата будет хранится просто числом, но геттер будет
  возвращать ее с долларом на конце.
*/   

class Employee {
    private string $name;
    private int $age;
    private int $salary;            
    
    public function setName(string $name): void {
        $this->name = $name;
    }
    
    public function getName(): string {
        return $this->name;
    }
    
    public function setAge(int $age): int {
        if($this->isAgeCorrect($age)) {
            return $this->age = $age;
        }    
    }      
    
    public function getAge(): int {
        return $this->age;
    }
    
    public function setSalary(int $salary): void {
        $this->salary = $salary;
    }
    
    public function getSalary(): string {
        return $this->salary . '$';
    }  
      
    private function isAgeCorrect(int $age): int {
        return $age >=1 && $age <= 100;
    }                   
}

$employee = new Employee;
$employee->setName('Петя');
$employee->setAge(20);
$employee->setSalary(1000);
echo $employee->getName() .', ' . $employee->getAge() . ' лет. Его оклад ' .  $employee->getSalary();

