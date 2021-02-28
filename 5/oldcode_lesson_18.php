<?php


// Урок 18. Практика на работу с пользовательскими функциями
// http://old.code.mu/tasks/php/base/praktika-na-rabotu-s-polzovatelskimi-funkciyami-php.html


// 1.Сделайте функцию, которая принимает строку на русском языке, а возвращает ее транслит.
echo 'Упражнение 1';
echo '<br>';

function translit(string $str){
		$ru = [ 'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й',
	       	'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф',
	       	'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я',
	       	'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й',
	       	'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф',
	       	'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я' ];
		$en = [ 'A', 'B', 'V', 'G', 'D', 'E', 'IO', 'ZH', 'Z', 'I', 'I',
	       	'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F',
	       	'H', 'C', 'CH', 'SH', 'SH', '`', 'Y', '`', 'E', 'IU', 'IA',
	       	'a', 'b', 'v', 'g', 'd', 'e', 'io', 'zh', 'z', 'i', 'i',
	       	'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f',
	       	'h', 'c', 'ch', 'sh', 'sh', '`', 'y', '`', 'e', 'iu', 'ia' ];
		return str_replace($ru, $en, $str);
}
echo translit('Сделайте функцию, которая принимает строку на русском языке, а возвращает ее транслит');
echo '<br>';

/* 2. Сделайте функцию, которая возвращает множественное или единственное число существительного.
Пример: 1 яблоко, 2 (3, 4) яблока, 5 яблок. Функция первым параметром принимает число, а следующие
3 параметра — форма для единственного числа, для чисел два, три, четыре и для чисел, больших четы-
рех, например, func(3, 'яблоко', 'яблока', 'яблок').
*/
echo 'Упражнение 2';
echo '<br>';

// формула расчета формы nplurals=3; plural=(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2);
// отсюда http://docs.translatehouse.org/projects/localization-guide/en/latest/l10n/pluralforms.html?id=l10n/pluralforms

/* 1 вариант

function form($num, $form1, $form2, $form3) {
	$result = $num . ' ' . $form3;
	if (1 === $num % 10 && 11 != $num % 100) {
		$result = $num . ' ' . $form1;
    	} elseif (($num % 10 > 1 && $num % 10 < 5) && ($num % 100 > 15 || $num % 100 < 11)) {
    		$result = $num . ' ' . $form2;
    	}
    	
    	return $result;
}
echo form(4,'яблоко', 'яблока', 'яблок' );
*/

/* 2 вариант

function form($num, $form1, $form2, $form3) {
	$num1 = $num % 10; // получаем последнюю цифру
	$num2 = $num % 100; // получаем последние две цифры
	
	$result = $num . ' ' . $form3;
	if (1 === $num1 && 11 != $num1) {
		$result = $num . ' ' . $form1;
	} elseif (($num1 > 1 && $num1 < 5) && ($num2 > 15 || $num2 < 11)) {
		$result = $num . ' ' . $form2;
	}

    	return $result;
}
echo form(4,'яблоко', 'яблока', 'яблок' );
*/

// 3 вариант
	
function form(string $num, $form1, $form2, $form3) {
    $num1 = substr($num, -2); // получаем последние две цифры
    $num2 = substr($num, -1); // получаем последнюю цифру
    
switch($num2) {
	case '1': 
		$result = $num . ' ' . $form1; 
	break;
	case '2':
	case '3':
	case '4':
		$result = $num . ' ' . $form2; 
        break;
        default:
        	$result = $num . ' ' . $form3; 
        break;
     }
if ($num1 >10 && $num1 < 20) {
	$result = $num . ' ' . $form3;
	}    
     return $result;

}
echo form('22', 'яблоко', 'яблока', 'яблок');	
echo '<br>';

// 3.Найдите все счастливые билеты. Счастливый билет - это билет, в котором сумма первых трех цифр
// его номера равна сумме вторых трех цифр его номера.
echo 'Упражнение 3';
echo '<br>';

function happyTicket(string $number) {
		$left_num = substr($number,0,3);
		$right_num = substr($number,strlen($left_num)); 
			$right_sum = array_sum(str_split($right_num));
			$left_sum = array_sum(str_split($left_num)); 
				if ($right_sum === $left_sum) {
					$ticket = 'Happy ticket';
				} else {
					$ticket =  'Try one more time';
				}		
				return $ticket;
}									
echo happyTicket('937992');
echo '<br>';

/* 4.Дружественные числа - два различных числа, для которых сумма всех собственных делителей первого
числа равна второму числу и наоборот, сумма всех собственных делителей второго числа равна первому числу.
Например, 220 и 284. Делители для 220 это 1, 2, 4, 5, 10, 11, 20, 22, 44, 55 и 110, сумма делителей равна
284. Делители для 284 это 1, 2, 4, 71 и 142, их сумма равна 220.

Задача: найдите все пары дружественных чисел в промежутке от 1 до 10000. Для этого сделайте вспомогательную
функцию, которая находит все делители числа и возвращает их в виде массива. Также сделайте функцию, которая
параметром принимает массив, а возвращает его сумму.
*/

echo 'Упражнение 4';
echo '<br>';

for($i=1; $i<=10000; $i++) {
	for($j=1; $j<=$i; $j++) {
		friendlyNumbers($i,$j);
	}
}		

//функция находит все делители заданного числа и возвращает их в виде массива

function getDivisors(int $num) { 
	$result = [];
	for ($i=1; $i < $num; $i++) {
		if ($num % $i === 0) {
			$result[] = $i;
		}
	}
	return $result;	
	}
//print_r(getDivisors(220));

//функция параметром принимает массив и возвращает его сумму

function getDigitsSum(array $result) {
	$sum = 0;
	foreach($result as $res) {
		$sum += $res;
	}
	return $sum;
}
//echo getDigitsSum($result = array(1, 2, 4, 5, 10, 11, 20, 22, 44, 55, 110));

function friendlyNumbers($i,$j) {
	if (getDigitsSum(getDivisors($i)) === $j && getDigitsSum(getDivisors($j))===$i && $i !== $j) {
		echo $i . ' and ' . $j . '<br>';
	
	}
}
