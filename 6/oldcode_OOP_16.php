<?php

// 16.1. Реализуйте класс Arr и вызовите его метод getSum сразу после создания объекта.

class Arr {
    public array $numbers = [];
    
    public function __construct($numbers) {
        $this->numbers = $numbers;
    }
    
    public function add(int $number): void {
        $this->numbers[] = $number;    
    }
    
    public function getSum(): int {
        return array_sum($this->numbers);
    }
}

echo (new Arr([10, 20, 30]))->getSum();

            
