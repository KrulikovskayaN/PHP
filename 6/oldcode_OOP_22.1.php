<?php

/* 22.1. Реализуйте класс Student, наследующий от User. Свойства класса User, name и age, задаются в конструкторе и в
         дальнейшем доступны только для чтения (то есть приватные и имеют только геттеры, но не сеттеры).
         Класс-потомок не имеет своего конструктора. Сделайте так, чтобы при создании объекта класса Student третьим
         параметром передавать еще и курс. Переопределите конструктор родителя своим конструктором.
*/

class User {
     protected string $name;
     protected int $age;
     
     public function __construct($name, $age) {
          $this->name = $name;
          $this->age = $age;
      }
      
      public function getName(): string {
          return $this->name;
      }
      
      public function getAge(): int {
          return $this->age;
      }
}

class Student extends User {
    private int $course;
    
    public function __construct($name, $age, $course) {
        $this->name = $name;
        $this->age = $age;
        $this->course = $course;
    }     
    
    public function getCourse(): int {
        return $this->course;
    }
}

$student = new Student('Сашко', 20, 4);  

echo $student->getName();
echo '<br>';
echo $student->getAge();
echo '<br>';
echo $student->getCourse();
