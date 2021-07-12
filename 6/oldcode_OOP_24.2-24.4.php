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
    private AvgHelper $avghelper;

    public function __construct() {
        $this->avghelper = new AvgHelper;
    }

    public function add(int $num): void {
        $this->number[] = $num;
    }

    // в пункті 24.4 не сказано, що результати повинні сумуватись
    public function getAvgMeanSum(): void {
        $numb = $this->number;

        // або функція може повернути зформовану строку разом з текстом,
        // і роздрукувати строку там де викликаєтсья ця функція
        echo 'Avg: ' . $this->avghelper->getAvg($numb);
        echo 'MeanSquare: ' . $this->avghelper->getMeanSquare($numb);
    }
}

class SumHelper {
    // оскільки функція Arr::add() приймає int, то тут аж ніяк не зможе бути float
    // тобто треба вибрати або щоб код почав обробляти int && float
    // або в функціях getSum2() та getSum3() змінити повертаючий тип на int
    public function getSum2(array $numb): float {
        $sum = 0;
        
        foreach ($numb as $elem) {
            $sum += pow($elem, 2);
        }

        return $sum;
    }

    public function getSum3(array $numb): float {
        $sum = 0;
        
        foreach ($numb as $elem) {
            $sum += pow($elem, 3);
        }

        return $sum;
    }
}

class AvgHelper {
    private SumHelper $sumHelper;

    public function __construct() {
        $this->sumHelper = new SumHelper();
    }
    
    public function getAvg(array $numb): float {
        // $count = count($numb). '<br>';
        // count($numb) -> це int, але після -> . '<br>' -> воно стає строкою,
        // а потім знову нище (в $avg = (array_sum($numb)/$count);) буде конвертуватись в int
        // ось скільки зайвого під капотом зробить php

        // душки лишні
        // $avg = (array_sum($numb)/$count);

        // навіщо створювати змінну, якщо значення виразу можна відразу повернути
        // return $avg;

        // тобто все що вище еквівалентне наступному
        return array_sum($numb)/count($numb);
    }
    
    public function getMeanSquare(array $numb): float {
        // $count = count($numb);

        // не треба вираз $this->sumHelper->getSum2($numb) обгортати в душки оскільки він є виразом,
        // і він (вираз) повертає одне число - тобто це ніби написати (15)/4
        // $result = ($this->sumHelper->getSum2($numb))/$count;
        // $sqrt = sqrt($result);
        // return $sqrt;

        // тобто все що вище еквівалентне наступному
        return sqrt($this->sumHelper->getSum2($numb)/count($numb));
    }
}

$arr = new Arr();

$arr->add(1);
$arr->add(2);
$arr->add(3);
$arr->add(4);

$arr->getAvgMeanSum();
