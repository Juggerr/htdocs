<?php

$sometext = 'albania-forewer'; //- исходная строка
$reversetext = ''; //- тут будет перевернутая строка
$count = strlen($sometext); //- вычисляем длинну строки
$count2 = $count;
$count2--;

for ($i = 0; $i < $count; $i++)
{
// @$reversetext[$i] .= $sometext[$count2--];
$reversetext .= $sometext[$count2--]; // Пускай это будет просто конкатенация 
}

// Так как мы сделали переменную $reversetext строчкой, то не нужно
// делать implode() (собирать массив в один)
// $reversetext = implode($reversetext); //- собираем строку из массива

print($reversetext);

?>
