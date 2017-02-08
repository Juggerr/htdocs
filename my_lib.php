<?php
/* тут будут мои полезные функции для последующего использования

список
1. функция для очистки телефона от мусора (пробелов, тире, скобок) - как в новой почте
2. Простой синонимайзер
3. Чистка урла от мусора
4. str_replace_once  функция которая заменяет только первое вхождение
5. делает из имен сайтов ссылки 
6. преобразует файлы цвс новой почты в читаемый текст на пхп
*/

// 1. =============================очистка телефона от мусора (пробелов, тире, скобок) 
<<<<<<< Updated upstream
$test = "098) 345-32-1-2"; // должно возвращать такое после обработки +380983453212
=======
$test = "(098) 345-32-1-2"; // должно возвращать такое после обработки +380983453212
>>>>>>> Stashed changes
function ClearPhone ($phone) {
$result = '+38';
$result .= preg_replace('/[^0-9]/', '', $phone);
return $result;
}

print ClearPhone($test);

// 2. ======================== простейший синонимайзер меняет слово на случайный синоним из массива

$text = 'президент Петр Порошенко, отвечая на вопрос о том, как он относится к позиции как президент США Дональд Трамп отменит антироссийские санкции, заявил, что больше всех желает этого, однако условия должны быть соблюдены. Также в переговорах участвовал президент Путин и его соратник президент Лушашенко';
$sinonim = array ('мусье', 'товарищь', 'вельми понеже', 'властелин', 'повелитель мира');
$change = 'президент';

$arr = explode(' ', $text); // разбираем строку в массив
foreach ($arr as &$value)
{
	if ($value == $change)
	{
		$value = $sinonim[array_rand($sinonim)];
	}
}
$text = implode (' ', $arr); // собираем массив обратно в строку
print $text;

// 3. ======================== чистит урл от пробелов / и хттп - оставляет только чистый урл 
$exm = ' http://ebana.ru/ ';
$exm = trim($exm, '/ c');
if(strpos($exm, 'http://') === false) {
	$exm = trim($exm, '/');
} else {
	$exm = substr($exm, strpos($exm, 'http://') + strlen('http://'));
	$exm = trim($exm, '/');
}

// можно одной строкой все зделать: echo str_replace("www.", "", str_replace("http://", "", trim(" http://www.ox2.ru/ ", "/ ")));

// 4. str_replace_once  функция которая заменяет только первое вхождение
$test = 'ehali medvedi yandex poteryali i gde on etot yandex';


function str_replace_once($search, $replace, $text) 
{ 
   $pos = strpos($text, $search); 
   return $pos!==false ? substr_replace($text, $replace, $pos, strlen($search)) : $text; 
} 

print str_replace_once('yandex', 'google', $test);

// 5. делает из имен сайтов ссылки
$test = 'ehali medvedi yandex.ru poteryali i gde on etot yandex.ru and google.com';
$found = 'yandex.ru';
$test = str_replace ($found, "<a href=http://{$found}>{$found}</a>", $test);
print $test;

// 6. преобразует файлы цвс новой почты в читаемый текст на пхп

$handle = fopen('np.csv', 'r');
$handle2 = fopen('np-new.csv', 'w');
$text = fread($handle, filesize('np.csv')); 
$text = iconv("UTF-16", "UTF-8", $text);
fwrite($handle2, $text);
fclose($handle);
fclose($handle2);


?>