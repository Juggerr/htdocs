<?php


$sales = array (array ('Northheast', '2005-01-01', '2015-02-01', 12.54),
				array ('Northheast', '2005-01-01', '2015-02-01', 124.54),
				array ('Southheast', '2005-01-01', '2015-02-01', 232.54),
				array ('Southheast', '2005-01-01', '2015-02-01', 202.54),
				array ('All Regions','--', '--', 1597.34));
$filename = './sales.csv';

$fn = fopen($filename, 'w') or die ('Cant open filename');
foreach ($sales as $sales_line)
{
	if (fputcsv($fh, $sales_line) === false)
	{
		die("cant write CSV line");
	}
}
fclose($fh) or die ("cant close $filename");



/*
$text = 'В HTML основная цель комментария в том, чтобы служить в качестве примечания разработчикам, которые могут просматривать исходный код вашего сайта. Комментарии РНР отличаются тем, что они не будут отображаться для посетителей. Единственный способ посмотреть PHP комментарии это открыть файл для редактирования. Это делает PHP комментарии полезными только для PHP — программистов.';

// эта функция заменяет все табуляции на пробелы
function tab_expand($text){
	while (strstr($text,"\t")){
		$text = preg_replace_callback('/^([^\t\n]*)(\t+)/m','tab_expand_helper', $text);
	}
	return $text;
}
function tab_expand_helper($matches){
	$tab_stop = 8;
	return $matches[1].str_repeat(' ',strlen($matches[2]) * $tab_stop = (strlen($matches[1]) % $tab_stop ));
}
//$spaced = tab_expand($texthtml);
//print $spaced;

// эта функция заменяет все пробелы на табуляции
function tab_unexpand($text){
	$tab_stop = 8;
	$lines = explode ("\n", $text);
	foreach ($lines as $i => $line) {
		// преобразование таб в пробелы
		$line = tab_expand($line);
		$chunks = str_split($line, $tab_stop);
		$chunkCount = count($chunks);
		// просмотр всех фрагрментов кроме последнего
		for ($j = 0; $j < $chunkCount -1; $j++){
			$chunks[$j] = preg_replace('/ {2,}$/', "\t", $chunks[$j]);
		}
		// если последний фрагрмент содержит пробелы, заполняющие позицию табуляции, преобразовать их в табуляцию. В противном случаем оставить их без изменения.
		if ($chunks[$chunkCount-1] == str_repeat(' ', $tab_stop)){
		$chunks[$chunkCount-1] = "\t";
			}
			// объединение фрагментов
			$lines[$i] = implode('',$chunks);
			// объединение строк
		}
		return implode("\n", $lines);
}
$some = tab_unexpand($text);
echo $some;
*/
?>