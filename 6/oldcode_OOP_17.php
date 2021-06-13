<?php

// 17.1. Реализуйте класс Arr, методы которого будут вызываться в виде цепочки.
// 17.2. Добавьте в класс Arr еще один метод append, который параметром будет принимать массив чисел
// и добавлять эти числа в конец массива, хранящегося в объекте.
// Предполагается, что методы add и append можно будет использовать в любом порядке:
// echo (new Arr)->add(1)->append([2, 3, 4])->add(5)->getSum();

class Arr {
    public array $numbers = [];

    public function add(int $number): self {
        $this->numbers[] = $number;
        return $this;
    }
    
    public function append(array $numbers): self {
        $this->numbers = array_merge($this->numbers, $numbers);
        return $this;
    }    
    
    public function getSum(): int {
        return array_sum($this->numbers);
    }
}

echo (new Arr)->add(1)->add(2)->getSum();
echo '<br>';
echo (new Arr)->add(1)->append([2, 3, 4])->add(5)->getSum();
        
        

