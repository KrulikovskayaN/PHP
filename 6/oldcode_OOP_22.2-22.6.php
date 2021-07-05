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
    // тут малось на увазі скоріш за все строка для параметру $birthday = '1981-12-12';
    // до того ж параметр повинен бути без дефолтного значення, цей параметр обов'язковий у конструкторі
    private array $birthday;
    // відповідно до пункту 22.4, $age повинен бути числом, а не string
    private int $age;
    
    public function getAge(): int {
        return $this->age;
    }    
    
    public function __construct(string $name, string $surname, array $birthday) {
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
      
    public function getBirthday(): array
    {
        return $this->birthday;
    }

    // функція не правильно рахувала у випадку коли день народження ще не відсвяткували,
    // воно виводило на два більше, ніж очікувалось
    public function calculateAge(): int {
        $year = date('Y');
        $month = date('m');
        $day = date('d');

        // щоб позбавитись else повністю,
        // змінна визначає чи було день народження відсвятвокане вже в цьому році
        $isCelebrated = false;

        // воно було однаковим в if && else, тож краще винести за межі
        $result = $year - $this->birthday[0];

        // умова вірна, але якби birthday був string, то так просто не вийшло б)
        if ($this->birthday[1] >= $month and $this->birthday[2] >= $day) {
            $isCelebrated = true;
            $result--;
        }

        // осікьки в if && else був вивід текстової строки, і тільки це залишалось в else,
        // то можна зробити тернаним оператором
        // або ось так
        echo $isCelebrated
                ? "День рождения уже был в этом году " . $result
                : "Дня рождения в этом году  еще не было, по-этому Вам " . $result;
        // або складніше
        echo ($isCelebrated
                ? "День рождения уже был в этом году "
                : "Дня рождения в этом году  еще не было, по-этому Вам " ) . $result;
        // основна ціль всього цього максимально зменшити дублювання коду та лаконічність коду

        // оскільки ми повенні зберегти int (сам вік), то ми це і повертаємо
        return $result;
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

$employee = new Employee ('Иван2','Иванов2',[1990, 03, 20], 10000);

echo $employee->getName().'<br>';
echo $employee->getSurname().'<br>';
echo $employee->getAge().'<br>';
echo $employee->getSalary().'<br>';
