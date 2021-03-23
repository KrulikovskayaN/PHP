<?php

// 9.1. Сделайте класс Employee, в котором будут следующие свойства: name (имя), surname (фамилия) и salary (зарплата).
// 9.2. Сделайте так, чтобы свойства name и surname были доступны только для чтения, а свойство salary - и для чтения, 
// и для записи.

class Employee {
    private string $name;
    private string $surname;
    private int $salary;
    
    public function getName(): void {
        return $this->name;
    }    
    
    public function getSurname(): void {
        return $this->surname;
    }
    
    public function getSalary(): void {
        return $this->salary;
    }
    
    public function setSalary(int $salary): int {
        $this->salary = $salary;
    }
}

                
