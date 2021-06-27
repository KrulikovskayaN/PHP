<?php

/* 22.2. Сделайте класс User, в котором будут следующие свойства только для чтения: name (имя), surname (фамилия).
         Начальные значения этих свойств должны устанавливаться в конструкторе. Сделайте также геттеры этих свойств.
   22.3. Сделайте так, чтобы третьим параметром в конструктор передавалась дата рождения работника в формате
         год-месяц-день. Запишите ее в свойство birthday. Сделайте геттер для этого свойства.
   22.4. Сделайте приватный метод calculateAge, который параметром будет принимать дату рождения, а возвращать
         возраст с учетом того, был ли уже день рождения в этом году, или нет.
   22.5. Сделайте так, чтобы метод calculateAge вызывался в конструкторе объекта, рассчитывал возраст пользователя и
         записывал его в приватное свойство age. Сделайте геттер для этого свойства.
   22.6. Сделайте класс Employee, который будет наследовать от класса User. Пусть новый класс имеет свойство salary,
         в котором будет хранится зарплата работника. Зарплата должна передаваться четвертым параметром в конструктор
         объекта. Сделайте также геттер для этого свойства.
*/

class User {
    private string $name;
    private string $surname;
    private array $birthday = [1981, 12, 12];
    private string $age;
    
    public function getAge(): string {
        return $this->age;
    }    
    
    public function __construct($name, $surname, $birthday) {
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = $birthday;
        $this->age = $this->calculateAge();
    }
    
    public function getName(): string {
        return $this->name;
    }
    
    public function getSurname(): string {
        return $this->surname;
    }
      
    public function getBirthday(): array {
        return $this->birthday;
    }
     
    public function calculateAge(): string {
        $year = date('Y');
        $month = date('m');
        $day = date('d');

        if ($this->birthday[1] >= $month and $this->birthday[2] >= $day) {
            $result = $year - $this->birthday[0];
            $resultNew = $result + 1;
            return "День рождения уже был в этом году " . $resultNew;

        } else {

            $result = $year - $this->birthday[0];
            return "Дня рождения в этом году  еще не было, по-этому Вам " . $result;
        }
    }    
}

class Employee extends User {
    private int $salary;
    
    public function __construct($name, $surname, $birthday, $salary) {
        parent::__construct($name, $surname, $birthday);
        $this->salary = $salary;
    }
    
    public function getSalary(): int {
        return $this->salary;
    }
}

$employee = new Employee ('Иван','Иванов',[1990, 11, 20], 10000);

echo $employee->getName().'<br>';
echo $employee->getSurname().'<br>';
echo $employee->getAge().'<br>';
echo $employee->getSalary().'<br>';                                   
