<?php

// 24.1. Повторите описанные классы Arr и SumHelper.

class Arr {
    public array $number = [];
    // тип ім'я класу, інстанс котрого ми збираємось туди зберегти
    private SumHelper $sumHelper;

    public function __construct() {
        $this->sumHelper = new SumHelper;
    }

    public function add($num): void {
        $this->number[] = $num;
    }

    public function getSum23(): int {
        $numb = $this->number;

        return $this->sumHelper->getSum2($numb) + $this->sumHelper->getSum3($numb);
    }
}

class SumHelper {
    public function getSum2(array $numb): int {
        $sum = 0;
        foreach ($numb as $elem) {
            $sum += pow($elem, 2);
        }
        return $sum;
    }

    public function getSum3(array $numb): int {
        $sum = 0;
        foreach ($numb as $elem) {
            $sum += pow($elem, 3);
        }
        return $sum;
    }
 }

$arr = new Arr();

$arr->add(1);
$arr->add(2);
$arr->add(3);

echo $arr->getSum23();
