<?php
$starttime = time()+microtime();
/*
массивы

array() - создание массива - функция
array('color' => 'red') - создание ассоциативного массива
array_push($array, $value, $value2...) - добавляет в массив значение в последнюю позицию (массив работает как стек)
array_pop($array, $value) - выталкивает последнее значение из массива (по типу стека) и возвращает его как значение
list($var, $var2, $var3) = $array - разбить массив на отдельные переменные

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
// --------------------- это очень странная конструкция ассоциативного массива
for ($i = 0; $i < 10; $i++)
{
	$test3['id'.$i] = $i;
}

for ($i = 3; $i < 8; $i++)
{
	echo $test3['id'.$i]; 
}
//-------------------------


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

$stoptime = time()+microtime();
$gentime = round($stoptime-$starttime, 4);
print "Page created in $gentime seconds.";

?>