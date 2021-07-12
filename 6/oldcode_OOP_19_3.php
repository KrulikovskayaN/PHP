<?php

// 19.3. Сделайте класс Programmer, который будет наследовать от класса Employee.
// Пусть новый класс имеет свойство langs, в котором будет хранится массив языков, 
// которыми владеет программист. Сделайте также геттер и сеттер для этого свойства.

class Employee {
    private int $salary;
    
    public function getSalary(): int {
        return $this->salary;
    }
    
    public function setSalary(int $salary): void {
         $this->salary = $salary;
    }
}    
             
class Programmer extends Employee {
    private array $langs = ['php', 'js'];
    
    public function setLangs(array $langs): void {
        $this->langs = $langs;
    }
    
    public function getLangs(): array {
        return $this->langs;
    }

    // також можна зробити більш зручніше

    public function addLang(string $lang): void
    {
        $this->langs[] = $lang;
    }

    public function deleteLang(string $lang): void
    {
        if ($key = array_search($lang, $this->langs)) {
            // поглянь різницю між цими двома способами (але якщо коротко то array_slice перераховує ключі масиву)
            // unset($this->langs[$key]);
            \array_splice($this->langs, $key, 1);
        }
    }
}

$programmer = new Programmer;
echo print_r($programmer->getLangs()) . '<br>';
$programmer->addLang('sql');
$programmer->addLang('python');
echo print_r($programmer->getLangs()) . '<br>';
$programmer->deleteLang('js');
echo print_r($programmer->getLangs()) . '<br>';
