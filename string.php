<?php
// глава 1 - строки
// функции которые встречаются тут
//
// strpos($string, $source) ищет в тексте искомый текст(возвр значение false если ненаходит)
// substr($string, 21, 5) выбирает из позиции 21 пять символов и возвращает их
// substr_replace ($string, $new-string, 25) заменяет в переменной $string с позиции 25, тем что 
// - хранится в переменной $new-string (служит для сокращения текста в постах или создания ссылки) 
// preg_replace ($regular, $new-value, $string) ищет в строке по регулярке и заменяет его 
// strlen ($string) возвращает количество символов в строке
// strtoupper strtolower большие или маленькие буквы делаем
// - поиск в строке определенного символа (например @) или слова
// strstr($haystack, needle) ищет в стоге первое вхождение иголки и возвращает строку начиная с нее
// strrev ($string) переставляет все символы в строке по байтам задомнаперед
// implode ('delimiter', $string) - разбивает строку на слова спомощью делимитера и помещает их в массив
// explode ('delimiter', $string) - объединяет элементы массива в строку

$text = 'some text here and there like that abracadabra';
$source = 'abracadabra';
  
if (strpos($text, $source) === false) {
	print 'not found ... failed';
} else {
	print "text \"{$source}\" on position ".$count = strpos($text, $source)." found success!";
}
echo "<br><br>";

// выделение подстрок (требуется выделить имя пользователя - первые восемь символов)
//$substring = substr($string, $start, $length);
$text2 = 'some text where user Admin was found';
$username = substr($text2, 21, 5);
print $username;
echo "<br><br>";

// заменить одну подстроку другой подстрокой, например закрыть номер кредитной карты
//$new_string = substr_replace($old_string, $new_string, $start, $length);
//  если оба параметра $start, $length равны 0 то значение $new_string подставиться в начало.

$creditcard = '4504 4030 2034 0362';
$hide = 'xxxx xxxx xxxx';
print $securecreditcard = substr_replace($creditcard, $hide, 0, 14);
echo "<br><br>";

// минипрограмма которая находит в тексте в любом месте номер мобильного телефона и засекречивает его ххх. если не находит то вы водит что телефон не найден.

$sometext = "where i can found here there your phone is +380953400307 made for me";
$hide2 = '380хх-xxx-хх-';
if (strpos($sometext, '+380') === false) {
	print "phone not found...";
} else {
print preg_replace ('/380......./',$hide2, $sometext);
}
echo "<br><br>";

// перебор по 1 символу из строки - программа подсчета гласных в строке

$string = "This weekend, I'm going shopping for a pet chiken.";
$vowels = 0;
for ($i = 0, $j = strlen($string); $i < $j; $i++) {
	if (strstr('aeiouAEIOU', $string[$i])){
		$vowels++;
	}
}
print $vowels;
echo "<br><br>";
// переставление слов задом наперед через массив
$string = 'Something new in this place';
$words = explode(' ',$string);
$words = array_reverse($words);
print $string = implode(' ',$words);
// тоже самое только в одной строке
print $string = implode(' ',array_reverse(explode(' ',$string)));
echo "<br><br>";
// функция генерации случайной строки 


function str_random($int, $int2){
	if(is_int($int) and is_int($int2)) {
return $ret = chr(rand($int,$int2)).chr(rand($int,$int2)).chr(rand($int,$int2)).chr(rand($int,$int2));
	}
	return false;
}

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

print random_string(14);


class Customer {
	// данные в базу данных должны читаться и писаться для этого нужно сделать методы (гетеры и сетеры)
	private id = 01;
	private logo = '\img\logo.jpg';
	private name = 'Samborskiy or Promelectro';
	private secondname = 'Name';
	private email = 'client@mgnail.com';
	private phone = '380963400394';
	private town = 'kiev';
	private price = '035'; // цена и рядом где то должен быть курс доллара (020,доллар 24, 01.12.2016) и типа истории должно быть сбоку
	private folder = 'folder url';
	private adressDelivery = 'id delivery';

class DeliveryAdress {
	private id = 'adressDelivery';
	private number_sklad = 15;
	private town_delivery = 'kyiv';
	private recipient = 'promelektro'
	private phone = '38097 456-33-33'
	private oplata = 'nal,beznal'; default nal
	private whopay = 'me, client'; default me
}
}
class Zakaz {
private id_client = 'id client'; // в заказ добавляется ид клиента + ид доставки
private metall ='06, ultramat, gold';
private holes = false;
private corners = false;
private nakl = false;
private optional_info = 'about zakaz some useful info';

}

//print str_random('a',90);

//print $random_string = chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90));


?>