<?php

/* 1. Согласно данным Бюро переписи населения США в 2010 году, самыми крупными в Соединенных Штатах Америки 
были следующие города: 
• Нью-Йорк (8175133 человек) 
• Лос-Анджелес, шт. Калифорния (3792621 человек)
• Чикаго, шт. Иллинойс (2695598 человек)
• Хьюстон, шт. Техас (2100263 человек)
• Филадельфия, шт. Пенсильвания (1526006 человек)
• Феникс, шт. Аризона (1445632 человек)
• Сан-Антонио, шт. Техас (1327407 человек)
• Сан-Диего, шт. Калифорния (1307402 человек)
• Даллас, шт. Техас (1197816 человек)
• Сан-Хосе, шт. Калифорния (945942 человек)
Определите один массив (или ряд массивов), хранящий местоположение и население перечисленных выше городов.
Выведите на экран таблицу со сведениями о местоположении и населении, а также общее население всех 
десяти городов.
*/
print '<table>';
print "<tr><td>Упражнение 1</td></tr>\n";
print "<tr><td>City</td><td>Population</td></tr>\n";
$census = [ 'New York, NY' => 8175133,
            'Los Angeles, CA' => 3792621,
	    'Chicago, IX' => 2695598,
            'Houston, TX' => 2100263,
	    'Philadelphia, PA' => 1526006,
	    'Phoenix, AZ' => 1445632,
	    'San Antonio, TX' => 1327407,
	    'San Diego, CA' => 1307402,
	    'Dallas, TX' => 1197816,
	    'San Jose, CA' => 945942 ];  
$total = 0;
foreach ($census as $city => $population) {
    $total += $population;
    print "<tr><td>$city</td><td>$population</td></tr>\n";
}
print "<tr><td>Total</td><td>$total</td></tr>\n";
print "<tr><td>\n";
print "<tr><td>\n";
print '</table>';              

// 2. Видоизмените выполнение задания в предыдущем упражнении таким образом, чтобы строки в результирующей
// таблице были упорядочены сначала по населению, а затем по названиям городов.
print '<table>';
print "<tr><td>Упражнение 2</td></tr>\n";
print "<tr><td>City</td><td>Population</td></tr>\n";
$census = [ 'New York, NY' => 8175133,
            'Los Angeles, CA' => 3792621,
	    'Chicago, IX' => 2695598,
            'Houston, TX' => 2100263,
	    'Philadelphia, PA' => 1526006,
	    'Phoenix, AZ' => 1445632,
	    'San Antonio, TX' => 1327407,
	    'San Diego, CA' => 1307402,
	    'Dallas, TX' => 1197816,
	    'San Jose, CA' => 945942 ]; 
// сортировка ассоциативного массива по значениям
asort($census);

print "<table>\n";
print "<tr><td>$city</td><td>$population</td></tr>\n";
$total = 0;
foreach ($census as $city => $population) {
    $total += $population;
    print "<tr><td>$city</td><td>$population</td></tr>\n";
}
print "<tr><td>Total</td><td>$total</td></tr>\n";
print "<tr><td>\n";
print "<tr><td>\n";
print '</table>';

// сортировка ассоциативного массива по ключам
ksort($census);

print "<table>\n";
print "<tr><td>$city</td><td>$population</td></tr>\n";
$total = 0;
foreach ($census as $city => $population) {
    $total += $population;
    print "<tr><td>$city</td><td>$population</td></tr>\n";
}
print "<tr><td>Total</td><td>$total</td></tr>\n";
print "<tr><td>\n";
print "<tr><td>\n";
print '</table>';

// 3. Видоизмените выполнение задания в первом упражнении таким образом, чтобы таблица содержала также строки
// с общим населением каждого штата, упомянутого в перечне самых крупных городов США.
print '<table>';
print "<tr><td>Упражнение 3</td></tr>\n";
print "<tr><td>\n";
print "<tr><td>City</td><td>Population</td></tr>\n";
$census = [ [ 'New York', 'NY', 8175133 ],
	     [ 'Los Angeles', 'CA' , 3792621 ],
	     [ 'Chicago', 'IL' , 2695598 ], 
	     [ 'Houston', 'TX' , 2100263 ], 
	     [ 'Philadelphia', 'PA' , 1526006 ], 
	     [ 'Phoenix', 'AZ' , 1445632 ], 
	     [ 'San Antonio', 'TX' , 1327407 ], 
	     [ 'San Diego', 'CA' , 1307402 ], 
	     [ 'Dallas', 'TX' , 1197816 ],
	     [ 'San Jose', 'CA' , 945942 ] ];
$total = 0; 
$state_totals = array();
foreach ($census as $city_info) {
   // обновить общую численность населения в каждом штате 
   $total += $city_info[2]; 
   // Если данный штат еще не встречался, инициализировать 
   // нулем переменную, хранящую общую численность его населения 
   if (! array_key_exists($city_info[1], $state_totals)) { 
       $state_totals[$city_info[1]] = 0; 
    } 
    // обновить общую численность населения в каждом штате 
    $state_totals[$city_info[1]] += $city_info[2]; 
    print "<tr><td>$city_info[0], $city_info[1]</td><td> $city_info[2]</td></tr>\n"; 
} 
print "<tr><td>Total</td><td>$total</td></tr>\n"; 
// вывести общую численность населения в каждом штате 
foreach ($state_totals as $state => $population) {
    print "<tr><td>$state</td><td>$population</td></tr>\n";
}
print "<tr><td>\n";
print "<tr><td>\n"; 
print "</table>";

/* 4. Выясните, как хранить каждый из приведенных ниже видов информации в массиве, а затем предоставьте пример
      кода, в котором создается такой массив, состоящий из нескольких элементов. 
   4.1. Классы и идентификационные номера учащихся в классе: ассоциативный массив, ключом которого служит Ф.И.О. 
      учащегося, а значением — ассоциативный массив, содержащий класс, а также идентификационный номер учащегося.
*/   
$students = [ 'James Jores' => 
		      [ 'grade' => 'A+', 'id' => 12345 ],
	      'Stella McCawely' =>
	      	      [ 'grade' => 'A', 'id' => 12346] ];

// 4.2. Количество каждого товара в запасах на складе.
$stock = [ 'Sneakers' => 100,
           'T-shirts' => 300,
           'Pants' => 300,
           'Jackets' => 50 ];
           
// 4.3. Школьные обеды, состоящие из разных блюд , а также их стоимость на каждый день недели.
$lunches = [ 'Monday' => ['cost' => 20,
			  'snack' => 'sandwich',
			  'main' => 'veal pie',
			  'drink' => 'tea' ],
	   'Tuesday' => [ 'cost' => 25,
	                  'snack' => 'pancakes',
	                  'main' => 'risotto',
	                  'drink' => 'juice' ],
	   'Wednesday' => [ 'cost' => 30,
	                    'snack' => 'mini pizza',
	                    'main' => 'pasta with meat',
	                    'drink' => 'stewed fruit' ],
	   'Thursday' => [ 'cost' => 35,
	                   'snack' => 'cheese sticks',
	                   'main' => 'cheese soup',
	                   'drink' => 'smoothies' ],
	   'Friday' => [ 'cost' => 40,
	                 'snack' => 'ham muffins',
	                 'main' => 'pumpkin soup',
	                 'drink' => 'juice' ] ];                                               		  

// 4.4. Имена членов вашей семьи.
$family = [ 'Vitaly', 'Svetlana', 'Ludmila', 'Alexandra' ];

// 4.5. Имена, возраст и родство членов вашей семьи.
$family = [ 'Vitaliy' => [ 'age' => 52,
			   'relation' => 'father' ],
	    'Svetlana' => [ 'age' => 51,
	                     'relation' => 'mother' ],
	    'Ludmila' => [ 'age' => 26,
	                   'relation' => 'sister' ],
	    'Alexandra' => [ 'age' => 68,
	                      'relation' => 'granny' ] ];
	                      
