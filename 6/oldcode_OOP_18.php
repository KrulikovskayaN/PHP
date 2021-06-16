<?php

// 18.1. Напишите реализацию методов класса ArrayAvgHelper.

class ArrayAvgHelper {

// Находит сумму первых степеней элементов массива

    public function getAvg1(array $arr): int {
        return $this->getSum($arr, 1);    
    }
    
// Находит сумму вторых степеней элементов массива и извлекает из нее квадратный корень

    public function getAvg2(array $arr): float {
        $result = $this->getSum($arr, 2);
        return $this->calcSqrt($result, 1/2); 
    }
    
// Находит сумму третьих степеней элементов массива и извлекает из нее кубический корень

    public function getAvg3(array $arr): float {
        $result = $this->getSum($arr, 3);
        return $this->calcSqrt($result, 1/3);    
    }
    
// Находит сумму четвертых степеней элементов массива и извлекает из нее корень четвертой степени

    public function getAvg4(array $arr): float {
       $result = $this->getSum($arr, 4);
       return $this->calcSqrt($result, 1/4);   
    
    }
    
// Вспомогательный метод, который параметром принимает массив и степень и возвращает сумму степеней
// элементов массива

    private function getSum(array $arr, float $power): float {
        $result = 0;
        
        foreach ($arr as $elem) {
            $result += pow($elem, $power);    
    }
    return $result;
}        
    
// Впомогательный метод, который параметром принимает целое число и степень и возвращает корень
// заданной степени из числа

    private function calcSqrt(int $num, float $power): float {
        return pow($num, $power);
    }
}


$arrayAvgHelper = new ArrayAvgHelper;

$arr = [1, 5, 9];

echo $arrayAvgHelper->getAvg1($arr) . '<br>';
echo $arrayAvgHelper->getAvg2($arr) . '<br>';
echo $arrayAvgHelper->getAvg3($arr) . '<br>';
echo $arrayAvgHelper->getAvg4($arr) . '<br>';

                    
