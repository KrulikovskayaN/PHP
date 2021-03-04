<?php

// Урок 19. Продвинутая работа с пользовательскими функциями
// http://old.code.mu/tasks/php/base/prodvinutaya-rabota-s-polzovatelskimi-funkciyami-v-php.html


// 1.Сделайте функцию cut, которая первым параметром будет принимать строку, а вторым параметром -
// сколько первых символов оставить в этой строке. Второй параметр должен быть необязательным и
// по умолчанию принимать значение 10.

function cut(string $string, int $a=10) {
    $string = mb_substr($string, 0, $a,'UTF-8');
    
    return $string;
}
var_dump (cut('Мечтать не вредно, вредно не мечтать', 20));
echo '<br>';
var_dump (cut('If length is given and is 0, false or null, an empty string will be returned.', 20));
echo '<br>';

// 2. Дан массив с числами. Выведите последовательно его элементы используя рекурсию и не используя цикл.

$arr = [1, 2, 3, 4, 5, 6, 7];

function all(array $arr) {
    
    echo array_shift($arr) . '<br>'; // первый элемент массива
	
    if(!empty($arr)) {
        all($arr);
    }
}	
	
all($arr);
echo '<br>';

// 3. Дано число. Сложите его цифры. Если сумма получилась более 9-ти, опять сложите его цифры. И так, 
// пока сумма не станет однозначным числом (9 и менее).

function lowNum(int $num) {
    
    $result = array_sum(str_split($num, 1));
	
    if ($result > 9) {
        $result = lowNum($result);
    }
    
    return $result;
}

var_dump (lowNum(12345678912));



 
    	





		

