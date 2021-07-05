<?php

/*
Пусть дан класс User с приватными свойствами name и age, а также геттерами и сеттерами этих свойств. При этом в сеттере возраста 
выполняется проверка возраста на то, что он равен или больше 18 лет:
<?php
	class User {
	    private $name;
	    private $age;
	    
	    public function getName() {
	        return $this->name;
	    }
	    
	    public function setName($name) {
	        $this->name = $name;
	    }
	    
	    public function getAge() {
	        return $this->age;
	    }
	    
	    public function setAge($age) {
	        // Выполняем проверку возраста:
		
		if ($age >= 18) {
		    $this->age = $age;
		}
          }
	}
?>

От класса User наследует класс Student с приватным свойством course, его геттером и сеттером:

<?php
	class Student extends User {
	     private $course;
	     
	     public function getCourse() {
	         return $this->course;
	     }
	     
	     public function setCourse($course) {
	         $this->course = $course;
	     }
	}
?>
*/

/* 21.1. Модифицируйте код класса User так, чтобы в методе setName выполнялась проверка того, что длина имени более 3-х символов.
   21.2. Добавьте в класс Student метод setName, в котором будет выполняться проверка того, что длина имени более 3-х символов и
         менее 10 символов. Пусть метод setName класса Student использует метод setName своего родителя, чтобы выполнить часть
         проверки.
*/

class User {
    protected ?string $name = null;
    private int $age;
    
    public function getName() {
        return $this->name;
    }    
    
    public function setName(string $name): void {
        if (mb_strlen($name) > 3) {
            $this->name = $name;
        } else {
            echo 'Меньше 3-х символов';
        }
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
    
    public function getCourse(): int {
        return $this->course;
    }
    
    public function setCourse(int $course): void {
        $this->course = $course;
    }
    
    public function setName(string $name): void {
        if (mb_strlen($name) < 10) {
            parent::setName($name);
        } else {
             echo 'Больше 10-ти символов';    
        }   
    }
}

$student = new Student;

$student->setName('М');
echo $student->getName();
echo '<br>';
$student->setName('Микола');
echo $student->getName();   
echo '<br>';
