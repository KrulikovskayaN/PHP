<?php

//19.2. Реализуйте класс Student, который будет наследовать от класса User. 
// Пусть новый класс добавляет свойство курс (course), а также геттеры и сеттеры к нему.

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

class Student extends User {
    private int $course;
    
    public function getCourse(): int {
        return $this->course;
    }
    
    public function setCourse(int $course): void {
        $this->course = $course;
    }
}            

$student = new Student;

$student->setCourse(4);
$student->setName('Женя');
$student->setAge(21);

echo $student->getCourse();
echo '<br>';
echo $student->getName();
echo '<br>';
echo $student->getAge();

