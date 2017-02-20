<?php
/*
описание функций для работы с числами
is_numeric() - возвращает 1 если это число и 0 ложь если значение не число
 - is_int, is_double, is_real, is_float - эти функции узнают подробный тип данных
abs() - получение абсолютного значения
round()  - округление чисел 
floor() - округление числа в меньшую сторону к примеру 2.1 даст 2 а 2.4 даст тоже 2 
ceil() - округление числа в большую сторону к примеру 2.1 даст 3 а 2.9 даст 3
range() - создает массив значений, к примеру range(3, 7,optional(2)) - создаст массив 3,4,5,6,7, третье значение это величина шага
также может возращать массив из символов в указанном диапазоне
mt_rand() - функция генерурует случайное число из диапазона, также есть более простая функция rand()
mt_srand() - если инициализировать вначале перед использованием мт_ранд то случайные значения будут предсказуемые.
number_format() форматирует число под удобочиваемый вид, делает точки между тысячами т.е. делает разделители разрядов
base_convert() - преобразует между различными системами счисления

*/
$test = array('alibaba', 2000, 'target', 0, 234, 'tes', 89);

foreach ($test as $key)
{
	if(is_numeric($key))
	{
	$value = "Да это цифра";	
	} else 
	{
	$value = "это строка";
	}
	echo "is value {$key} number? - ".$value."</br>";
}

$delta = 0.00001;
$a = 1.000001;
$b = 1.000000;
echo round($a);
if(abs($a - $b) < $delta)
{
print "{$a} and {$b} are aqual enough<br>";
}

$start = 3;
$end = 7;

for ($i = range($start, $end); $i <= $end; $i++)
{
	printf("%d squared is %d\n", $i, $i * $i);
}

function pick_color()
{
	$colors = array ('red', 'orange', 'yellow', 'blue', 'green', 'indigo', 'violet');
	$i = mt_rand(0, count($colors) - 1);
	return $colors[$i];
}
mt_srand(1);
$first = pick_color();
$second = pick_color();
print "{$first} and {$second} forewer the sam e!<br>";


function rand_weighted($numbers)
{
	$total = 0;
	foreach ($numbers as $number => $weight)
	{
		echo $total += $weight;
		echo $distribution[$number] = $total;
	}
	$rand = mt_rand(0, $total -1);
	foreach ($distribution as $number => $weights) 
	{
		if ($rand < $weights) {return $number;}
	}
}

$ads = array ('ford' => 1111, 'mers' => 2222, 'audi' => 3333);
echo $ad = rand_weighted($ads);

echo $test = number_format(495879457.4545);
$number = 1234.56;
$usa = new NumberFormatter('en-US', NumberFormatter::CURRENCY);
echo $formatted = $usa -> format($number);


function may_pluralize($singular_word, $amount_of) 
{

$plurals = array(
	'fish' => 'fish',
	'person' => 'people',
	'man' => 'men',
	'woman' => 'women');

if (1 == $amount_of)
{
	return $singular_word;
}

if (isset($plurals[$singular_word]))
{
	return $plurals[$singular_word];
}
return $singular_word. 's';
}

echo may_pluralize('man', 2);


$dec = 255;
$hex = 'f0f';
$bin = '0101011';

echo base_convert($bin, 2, 10);
for ($i = 0; $i < 1000; $i++)
{
	$a = wordwrap(decbin($i), 90);
	$a .= "<br>";
echo $a;
}































?>