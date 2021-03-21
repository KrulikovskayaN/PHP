<?php

// 2.1. Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), age (возраст), salary (зарплата).

class Employee {
    public string $name;
    public int $age;
    public int $salary;
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
echo '<br>';

 
// 3.1. Сделать тренировочный метод show(), который будет выводить '!!!'    	

class UserOne {
    public string $name;
    public int $age;

    public function show(): string {
        return '!!!';
    }
}

$user = new UserOne;
$user->name = 'Петя';
$user->age = 20;

echo $user->show();
echo '<br>';
        
// 3.2. Реализуйте такой же класс User с методом showW(), который параметром принимал какую-нибудь строку и добавлял ей в конец '!!!'    

class User {
    public string $name;
    public int $age;
    
    public function showW(string $str): string {
        return $str . '!!!';
    }
}

$user = new User;
$user->name = 'Вася';
$user->age = 25;

echo $user->showW('Hello');        
echo '<br>';

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
    public string $name;
    public int $age;
    public int $salary;
    
    public function getName(): string {
        return $this->name;
    }
    
    public function getAge(): int {
        return $this->age;
    }
    
    public function getSalary(): int {
        return $this->salary;
    }
    
    public function checkAge(): bool {
        return $this->getAge() > 18;
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
echo '<br>';
echo $employeeOne->getSalary() + $employeeOneTwo->getSalary();
echo '<br>';

// 4.7. Сделайте класс UserTwo, в котором будут следующие свойства - name (имя), age (возраст).
// 4.8. Сделайте метод setAge, который параметром будет принимать новый возраст пользователя.
// 4.9. Создайте объект класса User с именем 'Коля' и возрастом 25. С помощью метода setAge поменяйте возраст на 30. 
// Выведите новое значение возраста на экран.

class UserTwo {
    public string $name;
    public int $age;
    
    public function setAge(int $age): void {
        $this->age = $age;
    }
}


$userTwo = new UserTwo;
$userTwo->name = 'Коля';
$userTwo->age = 25;

$userTwo->setAge(30);

echo $userTwo->age;
echo '<br>';
echo '<br>';

// 4.10. Модифицируйте метод setAge так, чтобы он вначале проверял, что переданный возраст больше или равен 18. Если это так - пусть
// метод меняет возраст пользователя, а если не так - то ничего не делает.

class UserTwoT {
    public int $age;
    
    public function setAge(int $age): int {
      if ($age >= 18) {
           $result = $this->age = $age;
      } else {
          $result = 'Age less then 18';
      }
      return $result;
   }
}
   
$userTwoT = new UserTwoT;
$userTwoT->age = 17;

echo $userTwoT->setAge(19);        
echo '<br>';
echo '<br>';

// 4.11. Сделайте класс EmployeeDouble (работник), в котором будут следующие свойства - name (имя), salary (зарплата). Сделайте метод
// doubleSalary, который текущую зарплату будет увеличивать в 2 раза.


class EmployeeDouble {
    public int $salary;
    
    public function doubleSalary(): int {
        return $this->salary*2;
    }
}

$employeeDouble = new EmployeeDouble;
$employeeDouble->salary = 5000;

echo $employeeDouble->doubleSalary();      
echo '<br>';
echo '<br>';

// 4.12. Сделайте класс Rectangle (прямоугольник), в котором в свойствах будут записаны ширина и высота.
// 4.13. В классе Rectangle сделайте метод getSquare, который будет возвращать площадь этого прямоугольника.
// 4.14. В классе Rectangle сделайте метод getPerimeter, который будет возвращать периметр этого прямоугольника.

class Rectangle {
    public int $height;                
    public int $width;
    
    public function getSquare(): int {
        return $this->height * $this->width;
    }
    
    public function getPerimeter(): int {
        return (2 * ($this->height + $this->width));  
    }
}

$rectangle = new Rectangle;
$rectangle->height = 5;
$rectangle->width = 2;

echo 'Square = ' . $rectangle->getSquare();
echo '<br>';
echo 'Perimeter = ' . $rectangle->getPerimeter();
