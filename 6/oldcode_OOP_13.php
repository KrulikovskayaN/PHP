<?php

// 13.1. Реализуйте класс Arr с методом add, который параметром должен принимать массив чисел. 
// Все числа из этого массива должны добавляться в конец массива $this->numbers.
// 13.2. Реализуйте метод getAvg, который будет находить среднее арифметическое переданных чисел.


class Arr {
    public array $numbers = [1,2];
    
    public function getNumbers(): array {
        return $this->number;
    }
    
    public function add($numbers): void {
        $this->numbers = array_merge($this->numbers, $numbers);
    }
    
    public function getAvg(): float {
        return array_sum($this->numbers)/count($this->numbers);
    }
 }   
    
$arr = new Arr;
$arr->add([3, 4]);
//print_r ($arr);
echo $arr->getAvg().'<br>';

$arr1 = new Arr;
$arr1->add([5,6]);
//print_r ($arr1);
echo $arr1->getAvg().'<br>';        
    
