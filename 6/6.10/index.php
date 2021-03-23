<?php

/*
 10.1. Сделайте класс Employee, в котором будут следующие свойства: name (имя), surname (фамилия), patronymic (отчество)
 и salary (зарплата).
 Пусть этот класс хранится в отдельном файле.
 10.2. Подключите к файлу index.php класс Employee, создайте два объекта этого класса с произвольными данными, выведите 
 на экран сумму их зарплат.
*/
 
require_once 'Employee.php';

$employee1 = new Employee;
$employee1->name = 'Александр';
$employee1->surname = 'Александров';
$employee1->patronymic = 'Александрович';
$employee1->salary = 500;

$employee2 = new Employee;
$employee2->name = 'Василий';
$employee2->surname = 'Васильев';
$employee2->patronymic = 'Васильевич';
$employee2->salary = 700;   

echo 'Сумма зарплат = ' . ($employee1->salary + $employee2->salary);    
