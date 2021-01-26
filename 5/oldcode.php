<?php

// Урок 12. Работа с пользовательскими функциями в PHP


// 1.Сделайте функцию, которая возвращает квадрат числа. Число передается параметром.
echo 'Упражнение 1';
echo '<br>';

function kvadrat($num) {
	return $num *$num;
}
echo kvadrat(2);
echo '<br>';

// 2. Сделайте функцию, которая возвращает сумму двух чисел. Числа передаются параметрами функции.
echo 'Упражнение 2';
echo '<br>';

function sum($a, $b) {
	return $a + $b;
}
echo sum(2,5);
echo '<br>';

// 3.Сделайте функцию, которая отнимает от первого числа второе и делит на третье.
echo 'Упражнение 3';
echo '<br>';

function math($a, $b, $c) {
	$mathem = ($a - $b)/$c;
	return $mathem;
}
echo math(10,2,4);
echo '<br>';

// 4.Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке.			
echo 'Упражнение 4';
echo '<br>';

function dayWeek($a) {
	$dayWeek = [ 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс' ];
		echo $dayWeek[$a-1]; //счет начинаем с нуля
}
echo dayWeek(2);
echo '<br>';

// Урок 17. Правильное использование пользовательских функций

// 1. Сделайте функцию isNumberInRange, которая параметром принимает число и проверяет, что оно больше нуля и 
// меньше 10. Если это так - пусть функция возвращает true, если не так - false.
echo 'Упражнение 1';
echo '<br>';

function isNumberInRange($a) {
	if ($a >0 and $a < 10) {
		return true;
	} else {	
		return false;
	}	
}
echo isNumberInRange(1);
echo '<br>';

// 2.Дан массив с числами. Запишите в новый массив только те числа, которые больше нуля и меньше 10-ти. 
// Для этого используйте вспомогательную функцию isNumberInRange из предыдущей задачи.
echo 'Упражнение 2';
echo '<br>';

$a = [1, 21, 50, 9, 2, 8, 13];

foreach ($a as $elem) {
	if (isNumberInRange($elem)) 
		$new[] = $elem;
}

function isNumberInRange($a) {
	if ($a >0 and $a < 10) {
		return true;
	} else {	
		return false;
	}	
}
var_dump($new);
echo '<br>';

// 3.Сделайте функцию getDigitsSum (digit - это цифра), которая параметром принимает целое число и возвращает
// сумму его цифр.
echo 'Упражнение 3';
echo '<br>';

function getDigitsSum($num) {
	$sum = array_sum(str_split($num, 1));
	return $sum;	
}
echo getDigitsSum(123);

// 4.Найдите все года от 1 до 2021, сумма цифр которых равна 13. Для этого используйте вспомогательную функцию
// getDigitsSum из предыдущей задачи.	
echo 'Упражнение 4';
echo '<br>';

for ($i = 1; $i < 2022; $i++) {
	if (getDigitsSum($i) === 13) 
	echo $i.'<br>';
}

function getDigitsSum($num) {
	$sum = array_sum(str_split($num, 1));
	return $sum;	
}

// 5.Сделайте функцию isEven() (even - это четный), которая параметром принимает целое число и проверяет: четное
// оно или нет. Если четное - пусть функция возвращает true, если нечетное - false.
echo 'Упражнение 5';
echo '<br>';

function isEven($num) {
	return $num % 2 === 0;
}
var_dump (isEven(112));
echo '<br>';

// 6. Дан массив с целыми числами. Создайте из него новый массив, где останутся лежать только четные из этих чисел.
// Для этого используйте вспомогательную функцию isEven из предыдущей задачи.
echo 'Упражнение 6';
echo '<br>';	

$arr = [3, 8, 21, 7, 39, 51, 2, 45];

foreach ($arr as $elem) {
	if (isEven($elem)) 
		$narr[] = $elem;
}

function isEven($num) {
	return $num % 2 === 0;
}
var_dump ($narr);	
echo '<br>';

// 7.Сделайте функцию getDivisors, которая параметром принимает число и возвращает массив его делителей (чисел, на
// которое делится данное число). 
echo 'Упражнение 7';
echo '<br>';

function getDivisors($num) {
	for ($i=1; $i<=$num; $i++) {
		if ($num % $i === 0) {
			$garr[] = $i;
		}
	}
	return $garr;	
}
var_dump (getDivisors(3026));
echo '<br>';

// 8. Сделайте функцию getCommonDivisors, которая параметром принимает 2 числа, а возвращает массив их общих делителей.
// Для этого используйте вспомогательную функцию getDivisors из предыдущей задачи.
echo 'Упражнение 8';
echo '<br>';

function getCommonDivisors($a, $b) {
	return array_intersect(getDivisors($a), getDivisors($b));
}

function getDivisors($num) {
	for ($i=1; $i<=$num; $i++) {
		if ($num % $i === 0) {
			$garr[] = $i;
		}
	}
	return $garr;	
}
var_dump (getCommonDivisors(66, 33));
