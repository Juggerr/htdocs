<?php
// тут сборник интересных функций из книги

// функция возвращает случайную стоку (набор символов)реализация 1
function str_random($int, $int2){
	if(is_int($int) and is_int($int2)) {
return $ret = chr(rand($int,$int2)).chr(rand($int,$int2)).chr(rand($int,$int2)).chr(rand($int,$int2));
	}
	return false;
}
// функция возвращает случайную стоку (набор символов)реализация 2
function random_string($into){
	if (is_int($into) and $into != 0) {
	$ret_string = ' ';
	for ($i = 0, $j = $into; $i <= $j; $i++){
		$ret_string .= chr(rand(60,90));
	}
	return $ret_string;
	}
	return false;
}

// возвращает случайную стоку (набор символов)реализация 3
print $random_string = chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90));