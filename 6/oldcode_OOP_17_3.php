<?php

// 17.3. Сделайте класс User, у которого будут приватные свойства surname (фамилия), name (имя) и patronymic (отчество).
// Эти свойства должны задаваться с помощью соответствующих сеттеров.
// Сделайте так, чтобы эти сеттеры вызывались цепочкой в любом порядке, а самым последним методом в цепочке можно было
// вызвать метод getFullName, который вернет ФИО юзера (первую букву фамилии, имени и отчества).

class User {
    private string $surname = '';
    private string $name = '';
    private string $patronymic = '';
    
    public function setSurname(string $surname): self {
        $this->surname = $surname;
        return $this;
    }
    
    public function setName(string $name): self {
        $this->name = $name;
        return $this;
    }
    
    public function setPatronymic(string $patronymic): self {
        $this->patronymic = $patronymic;
        return $this;
    }
    
    public function getFullName(): string {
        return mb_strimwidth($this->surname, 0, 1) . mb_strimwidth($this->name, 0, 1) . mb_strimwidth($this->patronymic, 0, 1);
    }
}

echo (new User)->setName('Николай')->setPatronymic('Иванович')->setSurname('Петров')->getFullName(); // выведет 'ПНИ'
   
