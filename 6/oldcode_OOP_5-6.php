<?php

/*
5.1. Сделайте класс User. 
В нем метод setAge (для изменения возраста юзера) и метод addAge (для добавления некоторого количества лет к текущему возрасту). 
Добавьте проверку введенного возраста: если он от 18 до 60, то будем менять возраст на новый, а если нет - то менять не будем.
Вынесите проверку возраста на корректность в отдельный вспомогательный метод isAgeCorrect, в который параметром будет передавать-
ся возраст для проверки, и используйте его внутри методов setAge и addAge.
5.2. Создайте объект этого класса User, проверьте работу методов setAge и addAge.
5.3. Добавьте также метод subAge, который будет выполнять уменьшение текущего возраста на переданное количество лет. 
*/

class User {
    public string $name;
    public int $age;
    
    public function isAgeCorrect(int $age): int {
        return $age >= 18 && $age <= 60;
    }
   
      
    public function setAge(int $age): void {
       if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }
        
    public function addAge(int $years): void {
        $newAge = $this->age + $years;
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }
    
    public function subAge(int $years): void {
        $newAge = $this->age - $years;
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }  
}

$user = new User;
$user->name = 'Саша';
$user->age = 25;

$user->setAge(16);
echo $user->age;
echo '<br>';

$user->addAge(2);
echo $user->age;
echo '<br>';

$user->subAge(4);
echo $user->age;
echo '<br>';

/*
6.1. Сделайте класс Student со свойствами $name и $course (курс студента, от 1-го до 5-го).
6.2. В классе Student сделайте public метод transferToNextCourse, который будет переводить студента на следующий курс.
6.3. Выполните в методе transferToNextCourse проверку на то, что следующий курс не больше 5.
6.4. Вынесите проверку курса в отдельный private метод isCourseCorrect.
*/

class Student {
    public string $name;
    public int $course;
     
    public function transferToNextCourse(): int {
         if ($this->isCourseCorrect()) {
             $this->course++;  
          }
          return $this->course++; 
    }        
               
    private function isCourseCorrect(): int {
        return $this->course >= 1 && $this->course <=4; 
    }
}

$student = new Student;
$student->name = 'Женя';
$student->course = 1;

echo $student->name . ' переведен на ' . $student->transferToNextCourse() . ' курс ';
