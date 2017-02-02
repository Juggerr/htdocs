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

//print $exm;

$text = 'президент Петр Порошенко, отвечая на вопрос о том, как он относится к позиции как президент США Дональд Трамп отменит антироссийские санкции, заявил, что больше всех желает этого, однако условия должны быть соблюдены. Также в переговорах участвовал президент Путин и его соратник президент Лушашенко';
$sinonim = array ('мусье', 'товарищь', 'вельми понеже', 'властелин', 'повелитель мира');
$change = 'президент';

$arr = explode(' ', $text);
foreach ($arr as $value)
{
	print $arr[$value];
	if ($value == $change)
	{
		$arr[$value] = 'alibaba';
	}
}

var_dump($arr);


/*
//var_dump($sinonim);
$num = substr_count($text, $change);
//print $num;=
for ($num; $num >= 0; --$num) 
{
print $num;
$result = str_replace($change, $sinonim[array_rand($sinonim)], $text);

}
print $result;
*/

?>
// разобрать через имплоде
.. сделать функцию стр_реплайс_ванс
