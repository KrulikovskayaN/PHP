<?php

/*
 12.1. Создайте класс Student с двумя свойствами - name и course (курс студента).
 Сделайте так, чтобы имя студента приходило параметром при создании объекта, а курс автоматически принимал значение 1.
 Пусть имя созданного студента будет неизменяемым и доступным только для чтения, а для курса сделайте метод transferToNextCourse,
 который будет переводить студента на следующий курс.
 
 12.2. Модифицируйте метод transferToNextCourse так, чтобы при переводе на новый курс выполнялась проверка того, что новый курс не
 будет больше 5.
*/

class Student {
    private string $name;
    private int $course;
    
    public function __construct($name) {
        $this->name = $name;
        $this->course = 1;
    }
    
    public function getName(): string {
        return $this->name;
    }
    
    public function getCourse(): int {
        return $this->course;
    }    
    
    /*
    public function transferToNextCourse(): void {
        $this->course++;
    } 
    */
    
    public function transferToNextCourse(): void {
        if ($this->course <= 5) {
            $this->course++;
        } else {
            echo 'Студент закончил ВУЗ';
            exit;
        }
    }
}    

$student = new Student('Alex');

echo $student->getCourse(); // выведет 1
echo '<br>';
$student->transferToNextCourse(); // переведем на следующий курс
echo $student->getCourse(); // выведет 2
echo '<br>';
$student->transferToNextCourse();
echo $student->getCourse(); // выведет 3
echo '<br>';
$student->transferToNextCourse();
echo $student->getCourse(); // выведет 4
echo '<br>';
$student->transferToNextCourse();
echo $student->getCourse(); // выведет 5
echo '<br>';
$student->transferToNextCourse();
echo $student->getCourse(); // выведет 6
echo '<br>';
$student->transferToNextCourse();
echo $student->getCourse(); // выведет Студент закончил ВУЗ 
                 
    
