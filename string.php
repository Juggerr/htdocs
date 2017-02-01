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

$sometext = 'str_repeat does not repeat symbol with code 0 on some';
print ucfirst($sometext); // функция делает заглавной только первую букву в строке
print ucwords($sometext); // функция делает все буквы заглавными
print strtoupper



?>