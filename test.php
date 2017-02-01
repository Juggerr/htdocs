<?php 
// это временный файл для различных тестов
// http://ox2.ru/ а надо ох2.ру т.е. все почистить
/*strpos выдает позицию искомого слова в строке
strlen показыает длину строку
trim удаляет символы по краям какие укажешь 
str_replace - заметяет слова на другие в строке
substr - обрезает с нужной позиции строку */

$exm = ' http://ebana.ru/ ';
$exm = trim($exm, '/ c');
if(strpos($exm, 'http://') === false) {
	$exm = trim($exm, '/');
} else {
	$exm = substr($exm, strpos($exm, 'http://') + strlen('http://'));
	$exm = trim($exm, '/');
}

print $exm;

?>