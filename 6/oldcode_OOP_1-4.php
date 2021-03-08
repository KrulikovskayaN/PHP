<?php

// 2.1. Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), age (возраст), salary (зарплата).

class Employee {
    public $name;
    public $age;
    public $salary;
}	

// 2.2. Создайте объект класса Employee, затем установите его свойства в следующие значения - имя 'Иван', возраст 25, зарплата 1000.

$employee = new Employee;
$employee->name = 'Иван';
$employee->age = 25;
$employee->salary = 1000;

// 2.3. Создайте второй объект класса Employee, установите его свойства в следующие значения - имя 'Вася', возраст 26, зарплата 2000.

$employee1 = new Employee;
$employee1->name = 'Вася';
$employee1->age = 26;
$employee1->salary = 2000;


// 2.4. Выведите на экран сумму зарплат Ивана и Васи.

echo $employee->salary + $employee1->salary;
echo '<br>';

// 2.5. Выведите на экран сумму возрастов Ивана и Васи.

echo $employee->age + $employee1->age;
 
// 3.1. Сделать тренировочный метод show(), который будет выводить '!!!'    	

class UserOne {
    public $name;
    public $age;

    public function show() {
        return '!!!';
    }
}

$user = new UserOne;
$user->name = 'Петя';
$user->age = 20;

echo $user->show();
        
// 3.2. Реализуйте такой же класс User с методом showW(), который параметром принимал какую-нибудь строку и добавлял ей в конец '!!!'    

class User {
    public $name;
    public $age;
    
    public function showW($str) {
        return $str . '!!!';
    }
}

$user = new User;
$user->name = 'Вася';
$user->age = 25;

echo $user->showW('Hello');        

/* 
4.1. Сделайте класс EmployeeOne (работник), в котором будут следующие свойства - name (имя), age (возраст), salary (зарплата).
4.2. Сделайте в классе EmployeeOne метод getName (будет возвращать имя работника).
4.3. Метод getAge (будет возвращать возраст работника).
4.4. Метод getSalary (будет возвращать зарплату работника). 
4.5. Сделайте в классе EmployeeOne метод checkAge, который будет проверять то, что работнику больше 18 лет и возвращать true,
если это так, и false, если это не так. 
4.6. Создайте два объекта класса Employee, запишите в их свойства какие-либо значения. С помощью метода getSalary найдите 
сумму зарплат созданных работников.  
*/

class EmployeeOne {
    public $name;
    public $age;
    public $salary;
    
    public function getName() {
        return $this->name;
    }
    
    public function getAge() {
        return $this->age;
    }
    
    public function getSalary() {
        return $this->salary;
    }
    
    public function checkAge() {
        if ($this->getAge() > 18) {
             return 'true';
        } else {
             return 'false';
      }
   }
}
    
$employeeOne = new EmployeeOne;
$employeeOne->name = 'Василий';
$employeeOne->age = 21;
$employeeOne->salary = 1001;
    
$employeeOneTwo = new EmployeeOne;
$employeeOneTwo->name = 'Петро';
$employeeOneTwo->age = 22;
$employeeOneTwo->salary = 2002;
    
echo $employeeOne->checkAge();
echo $employeeOne->getSalary() + $employeeOneTwo->getSalary();

// 4.7. Сделайте класс UserTwo, в котором будут следующие свойства - name (имя), age (возраст).
// 4.8. Сделайте метод setAge, который параметром будет принимать новый возраст пользователя.
// 4.9. Создайте объект класса User с именем 'Коля' и возрастом 25. С помощью метода setAge поменяйте возраст на 30. 
// Выведите новое значение возраста на экран.

class UserTwo {
    public $name;
    public $age;
    
    public function setAge($age) {
        $this->age = $age;
    }
}

$userTwo = new UserTwo;
$userTwo->name = 'Коля';
$userTwo->age = 25;

$userTwo->setAge(30);

echo $userTwo->age;


// 4.10. Модифицируйте метод setAge так, чтобы он вначале проверял, что переданный возраст больше или равен 18. Если это так - пусть
// метод меняет возраст пользователя, а если не так - то ничего не делает.

class UserTwoT {
    public $age;
    
    public function setAge($age) {
      if ($age >= 18) {
          return $this->age = $age;
      } else {
          return 'Age less then 18';
      }
   }
}
   
$userTwoT = new UserTwoT;
$userTwoT->age = 17;

echo $userTwoT->setAge(19);        

// 4.11. Сделайте класс EmployeeDouble (работник), в котором будут следующие свойства - name (имя), salary (зарплата). Сделайте метод
// doubleSalary, который текущую зарплату будет увеличивать в 2 раза.


class EmployeeDouble {
    public $salary;
    
    public function doubleSalary() {
        return $this->salary*2;
    }
}

$employeeDouble = new EmployeeDouble;
$employeeDouble->salary = 5000;

echo $employeeDouble->doubleSalary();      

// 4.12. Сделайте класс Rectangle (прямоугольник), в котором в свойствах будут записаны ширина и высота.
// 4.13. В классе Rectangle сделайте метод getSquare, который будет возвращать площадь этого прямоугольника.
// 4.14. В классе Rectangle сделайте метод getPerimeter, который будет возвращать периметр этого прямоугольника.

class Rectangle {
    public $height;                
    public $width;
    
    public function getSquare() {
        return $this->height * $this->width;
    }
    
    public function getPerimeter() {
        return (2 * ($this->height + $this->width));  
    }
}

$rectangle = new Rectangle;
$rectangle->height = 5;
$rectangle->width = 2;

echo 'Square = ' . $rectangle->getSquare();
echo '<br>';
echo 'Perimeter = ' . $rectangle->getPerimeter();
