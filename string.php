<?php
/* глава 1 - строки
-= функции которые встречаются тут =-

strpos($string, $source) ищет в тексте искомый текст(возвр значение false если ненаходит)
strlen ($string) возвращает количество символов в строке
strstr ($string $haystack, $needle) находит первое вхождение иголки и возвращает эту же строку только с позиции искомое слово + вся остальная строка
str_repeat ($string, int multiplier) возвращает повторяющуюся строку столько раз сколько мультиплер 

substr($string, 21, 5) выбирает из позиции 21 пять символов и возвращает их
str_replace ($search , $replace , $subject) заменяет все вхождения строки поиска на строку замены
substr_replace($test, 'google', $position_of_search_word, $length_searching_word);
preg_replace ($regular, $new-value, $string) ищет в строке по регулярке и заменяет его 

 wordwrap($texter, 10) форматирует текст по 10 символов в строку

strtoupper strtolower большие или маленькие буквы делаем strstr($haystack, needle) ищет в стоге первое вхождение иголки и возвращает строку начиная с нее
strrev ($string) переставляет все символы в строке по байтам задомнаперед
implode ('delimiter', $string) - разбивает строку на слова спомощью делимитера и помещает их в массив
explode ('delimiter', $string) - объединяет элементы массива в строку
*/

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

$sometext = 'str_repeat does not repeat symbol WITH with code 0 on some';
print ucfirst($sometext); // функция делает заглавной только первую букву в строке
print ucwords($sometext); // функция делает все буквы заглавными
print strtoupper($sometext); // функция делает все заглавными
print strtolower($sometext); // функция делает все маленькими

/**
 * Работа со строковыми функциями
 * @author дизайн студия ox2.ru  
 */
//Строка, которую нужно привести к виду "ox2.ru". 
//Заметьте что адрес сайта еще и окружен пробелами! 
$string = " http://www.ox2.ru/ ";
 
$string = trim($string, "/ "); //Удаляем пробелы по-бокам, и слэш справа
if (strpos($string, "http://") !== false) { //Если в строке присутствует подстрока http://, то: 
    $string = substr($string, strpos($string, "http://")  + strlen("http://")); //Обрезаем
}
if (strpos($string, "www.") !== false) {
    $string = substr($string, strpos($string, "www.") + strlen("www."));
}
echo ""$string"";

// или можно так короче

echo str_replace("www.", "", str_replace("http://", "", trim(" http://www.ox2.ru/ ", "/ ")));

?>

strlen ("текст") — считает количество символов в строке
str_replace("что заменять", "на что заменять", "текст"); – функция нужна для замены подстроки в строке.
trim ("текст", "символы") — удаляет символы по краям
substr("Строка", "Начальная позиция", "Конечная позиция"); - возвращает часть строки
strpos("Строка", "подстрока", позиция начального символа); — возвращает позицию найденной подстроки в строке

