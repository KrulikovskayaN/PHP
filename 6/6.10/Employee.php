<?php

/*
 10.1. Сделайте класс Employee, в котором будут следующие свойства: name (имя), surname (фамилия), patronymic (отчество)
 и salary (зарплата).
 Пусть этот класс хранится в отдельном файле.
 10.2. Подключите к файлу index.php класс Employee, создайте два объекта этого класса с произвольными данными, выведите 
 на экран сумму их зарплат.
*/
 
class Employee {
    public string $name;
    public string $surname;
    public string $patronymic;
    public int $salary;
}
         
