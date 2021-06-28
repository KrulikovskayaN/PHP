<?php

/* 24.2. Создайте класс AvgHelper с методом getAvg, который параметром будет принимать массив и возвращать среднее арифметическое
   этого массива (сумма элементов делить на количество).
   24.3. Добавьте в класс AvgHelper еще и метод getMeanSquare, который параметром будет принимать массив и возвращать среднее
   квадратичное этого массива (квадратный корень, извлеченный из суммы квадратов элементов, деленной на количество).
   24.4. Добавьте в класс Arr метод getAvgMeanSum, который будет находить сумму среднего арифметического и среднего квадратичного
   из массива $this->nums.
*/

class Arr {
    public array $number = [];
    private $avghelper;

    public function __construct() {
        $this->avghelper = new AvgHelper;
    }

    public function add(int $num): void {
        $this->number[] = $num;
    }

    public function getAvgMeanSum(): float {
        $numb = $this->number;
        
        $result = $this->avghelper->getAvg($numb) + $this->avghelper->getMeanSquare($numb);
        return $result;
    }
}

class SumHelper {
    public function getSum2(array $numb): float {
        $sum = 0;
        
        foreach ($numb as $elem) {
            $sum += pow($elem, 2);
        }
        return $sum;
    }
    
    public function getSum3(int $numb): float {
        $sum = 0;
        
        foreach ($numb as $elem) {
            $sum += pow($elem, 3);
        }
        return $sum;
    }
}

class AvgHelper{
    private $sumHelper;

    public function __construct() {
        $this->SumHelper = new SumHelper();
    }
    
    public function getAvg(array $numb): float {
        $count = count($numb). '<br>';
        $avg = (array_sum($numb)/$count);
        return $avg;
    }
    
    public function getMeanSquare(array $numb): float {
        $count = count($numb);
        
        $result = ($this->SumHelper->getSum2($numb))/$count;
        $sqrt = sqrt($result);
        return $sqrt;
    }
}

$arr = new Arr();

$arr->add(1);
$arr->add(2);
$arr->add(3);
$arr->add(4);

echo $arr->getAvgMeanSum();
