<?php

$sometext = 'albania-forewer'; - исходная строка
$reversetext = ''; - тут будет перевернутая строка
$count = strlen($sometext); - вычисляем длинну строки
$count2 = $count; 
$count2--; 

for ($i = 0; $i < $count; $i++)
{
@$reversetext[$i] .= $sometext[$count2--];
}
$reversetext = implode($reversetext); - собираем строку из массива

print($reversetext);

?>