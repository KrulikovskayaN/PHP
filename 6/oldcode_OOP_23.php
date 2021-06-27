<?php

/* 23.1. Сделайте класс Product (продукт), в котором будут следующие свойства: name (название продукта), price (цена).
   23.2. Создайте объект класса Product, запишите его в переменную $product1.
   23.3. Присвойте значение переменной $product1 в переменную $product2. Проверьте то, что обе переменные ссылаются на
   один и тот же объект.
*/

class Product {
    public string $name;
    public int $price;
    
}

$product1 = new Product;      

$product1->name = 'juice';
$product1->price = 25;

$product2 = $product1;

echo $product1->name.'<br>';
echo $product1->price.'<br>';
echo $product2->name.'<br>';
echo $product2->price.'<br>';
