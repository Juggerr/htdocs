<?php
//$starttime = time()+microtime();
/*
массивы

array() - создание массива - функция
array('color' => 'red') - создание ассоциативного массива
array_push($array, $value, $value2...) - добавляет в массив значение в последнюю позицию (массив работает как стек)
array_pop($array, $value) - выталкивает последнее значение из массива (по типу стека) и возвращает его как значение
list($var, $var2, $var3) = $array - разбить массив на отдельные переменные
range(2,20, 1) -  создает массив с диапазоном чисел 2-20 и шагом 1
reset($array) — Устанавливает внутренний указатель массива на его первый элемент
each($array) - возращает текушую пару ключ-значение массива
key() возвращает индекс текущего элемента массива ?? value
current() — Возвращает текущий элемент массива ?? index
next() — Передвигает внутренний указатель массива на одну позицию вперёд

array_map(call_back_function, $array) example $upperarray = array_map('strtoupper', $array) обработка каждого элемента массива

array_walk($array, callback func) -  применяет каллбек функцию к каждому элементу массива - работает по типу foreach те с копией массива

is_array() - определяет массив ли это
settype() - присваивает переменной новый тип settype($somevars, 'array') - преобразование всех переменных в массив
unset() - удаляет переменную или элемент массива

array_splice($array, $offset - c какого индекса начнется удаление, $length - сколько удалять) — Удаляет часть массива и заменяет её чем-нибудь ещё
array_splice($array, 2, 2) вырезание из архива с 2 позиции, 2 ключ+значение

array_values() — если массив ассоциативный то функция приводит к индексным ключам весь массив т.е. было 'aaa' => 'a' стало 01 => 'a';


array_shift() -  извлечь первое значение массива и возращает его скращая на 1

array_pop() - извлекает последнее значение массива и возращает его сокращая на 1

$newarray = array_pad($array, 5, '') - расшираяет массив до 5 двумя пробелами
если значение -5 то добавляет вначало массива еще 4 значений



foreach ( $myArray as &$value - &cслыка на значение если нужно поменять данные в массиве

-- обычный массив индексный
foreach ($array as $somekey)
{
	тут делаем все что угодно с $somekey
}

-- ассоциативный массив
foreach ($array as $key => $value)
{
Делаем что-нибудь с $key и/или с $value	
}

*/

$testarray = range(0, 100, 1);

$newArray = array_slice($testarray, 80, 20);
$count = count($newArray);
$newArray = array_pad($newArray, 10, "d");

$count2 = count($newArray);
print_r($newArray);
echo "{$count} - before: {$count2}";



$arrayz = array (
1 => 'a',
'test' => 'b',
3 => 'c',
4 => 'd',
5 => 'f',
6 => 'g',
7 => 'h',
8 => 'm',
9 => 'x',
10 => 'z'
);

foreach ($arrayz as $key => $value)
{
//	echo "{$key} - {$value}</br>";
	$value = $value.'-adder';
	//echo "new value is {$value}</br>";
}	

$some = array_values($arrayz);

$colorArray = ['red', 'white', 'green', 'blue', 'orange'];
$brandArray = ['mercedes', 'bmv', 'audi', 'jeep', 'toyota'];
$priceArray = [2000, 10000, 40500, 6000, 7000];

$arrayTwoDimension = array(
	array('color' => 'default'),
	array('brand' => 'default'),
	array('cost' => 1000)
	);

for ($i = 0; $i < 5; $i++)
{
	$arrayTwoDimension[]['color'] = $colorArray[$i];
	$arrayTwoDimension[]['brand'] = $brandArray[$i];
	$arrayTwoDimension[]['price'] = $priceArray[$i];	
}


foreach($arrayTwoDimension as $key => $value)
{
	//echo $key;
	foreach($value as $key => $value)
	{
	//echo "{$key} - {$value}</br>";
	}
}

//-------------------------------- создание двухмерного массива
$fruits = array();
$fruits['red'][] = 'strabbery';
$fruits['red'][] = 'apple';
$fruits['yellow'][] = 'banana';








//------------------------------- вывод всего массива через while each
//while (list($index, $value) = each($testarray))
//{
//echo "Index: {$index} - Value is: {$value}<br>";
//}




$test = array('alfa', 'betta', 'omega');
$test2[0] = 'alfa2';
$test2[1] = 'betta2';
$test2[2] = 'omega2';

$test3 = [
'id' => 0,
'color' => 'red',
'type' => 'bmv',
'cost' => 20000
];
/* --------------------- это очень странная конструкция ассоциативного массива
for ($i = 0; $i < 10; $i++)
{
	$test3['id'.$i] = $i;
}

for ($i = 3; $i < 8; $i++)
{
	echo $test3['id'.$i]; 
}
*/


$test4 = array('color' => 'green', 'type' => 'mercedes', 'cost' => 40000);
array_push($test4, 'abra', 7777);
array_pop($test4);

//print_r($test3);
//var_dump($test3);
/*
foreach($test3 as $key => $value)
{
echo $value;
}
*/

//$stoptime = time()+microtime();
//$gentime = round($stoptime-$starttime, 4);
//print "Page created in $gentime seconds.";

?>