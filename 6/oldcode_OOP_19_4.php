<?php

// 19.4. Сделайте класс Driver (водитель), который будет наследовать от класса Employee (который, в свою очередь,
// наследуется от класса User). Пусть новый класс добавляет следующие свойства: водительский стаж, категория
// вождения (A, B, C, D), а также геттеры и сеттеры к ним.

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

class Employee extends User {
    private int $salary;
    
    public function getSalary(): int {
        return $this->salary;
    }
    
    public function setSalary(int $salary): void {
        $this->salary = $salary;
    }  
}

class Driver extends Employee {
    // я б порадила не робити тавтології Driver має $drivingExperience, простіше Driver має $experience
    private int $drivingExperience;
    private string $drivingCategory;
    
    public function getDrivingExperience(): int {
        return $this->drivingExperience;
    }
    
    public function setDrivingExperience(int $drivingExperience): void {
        $this->drivingExperience = $drivingExperience;
    }
    
    public function getDrivingCategory(): string {
        return $this->drivingCategory;
    }
    
    public function setDrivingCategory(string $drivingCategory): void {
        $this->drivingCategory = $drivingCategory;
    }
}

$driver = new Driver;

$driver->setAge(23);
$driver->setName('Володя');
$driver->setSalary(10000);
$driver->setDrivingCategory('B');
$driver->setDrivingExperience(3);

echo $driver->getAge() . '<br>';
echo $driver->getName() . '<br>';
echo $driver->getSalary() . '<br>';
echo $driver->getDrivingCategory() . '<br>';
echo $driver->getDrivingExperience() . '<br>';
         


