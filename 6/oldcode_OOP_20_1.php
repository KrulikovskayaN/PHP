<?php

// 20.1. Сделайте класс Student, который будет наследовать от класса User. 
// Класс User должен иметь приватные свойства name и age. 
// В классе Student сделайте метод addOneYear, который будет добавлять 1 год к свойству age.

class User {
    private string $name;
    protected int $age;
    
    public function getName(): string {
        return $this->name;
    }
    
    public function setName(string $name): void {
        $this->name = $name;
    }
    
    public function getAge(): int {
        return $this->age;
    }
    
    public function setAge(int $age): void {
        $this->age = $age;
    }
}

class Student extends User {
    private int $course;
    
    public function addOneYear(): void {
        $this->age++;
    }
    
    public function getCourse(): int {
        return $this->course;
    }
    
    public function setCourse(int $course): void {
        $this->course = $course;
    }
}

$student = new Student();

$student->setName('Сашко');
$student->setCourse(2);
$student->setAge(19);

$student->addOneYear();
echo $student->getAge();                            
             


