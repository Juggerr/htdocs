<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php

	
setlocale(LC_ALL, 'ru_RU.UTF-8');

$sales = array (array ('Northheast', '2005-01-01', '2015-02-01', 12.54),
				array ('Northheast', '2005-01-01', '2015-02-01', 124.54),
				array ('Southheast', '2005-01-01', '2015-02-01', 232.54),
				array ('Southheast', '2005-01-01', '2015-02-01', 202.54),
				array ('All Regions','--', '--', 1597.34));
$filename = './sales.csv';

$fn = fopen($filename, 'w') or die ('Cant open filename');
foreach ($sales as $sales_line)
{
	if (fputcsv($fn, $sales_line) === false)
	{
		die("cant write CSV line");
	}
}
fclose($fn) or die ("cant close $filename");

$sales = array (array ('Northheast', '2005-01-01', '2015-02-01', 12.54),
				array ('Northheast', '2005-01-01', '2015-02-01', 124.54),
				array ('Southheast', '2005-01-01', '2015-02-01', 232.54),
				array ('Southheast', '2005-01-01', '2015-02-01', 202.54),
				array ('All Regions','--', '--', 1597.34));

ob_start ();
$fh = fopen('php://output','w') or die("Cant open php://output");
foreach ($sales as $sales_line)
{
	if (fputcsv ($fh, $sales_line) === false)
	{
		die ("Cant write CSV line");
	}
}
fclose($fh) or die ("cant close php://output");
$output = ob_get_contents();
ob_end_clean();


$texter = "В столице образовались 10-бальнные пробки по версии Яндекс.Пробки. Согласно данным сервиса, произошло уже 17 ДТП. Так, на Южном и Гаванском мостах скорость движения не превышает 5 км/час. Авто на Набережном шоссе движется не более 40 км/час. Пробки в Киеве";

/*
$handler = '';
$handler = fopen($filename, 'w') or die ("cant open {$filename}");
fwrite($handler, $texter) or die ("cant wtite to file {$filename}");
fclose($handler) or die ("cant close {$filename}");
*/
function file_getz_content($filename)
{
	$handle = fopen($filename, 'r') or die (FALSE);
	return fread($handle, filesize($filename));
	fclose($handle);
}

function file_putz_content($filename, $string)
{
	$handle = fopen($filename, 'w') or die (FALSE);
	fwrite($handle, $string) or die (FALSE);
	fclose($handle);
}
/*
$work = 'sales.csv';

$handle = fopen($work, 'r') or die ("cant read file {$work}");
//print_r ($csv_line = fgetcsv($handle, 1000, ','));
print "<table>\n";
while($csv_line = fgetcsv($handle, 1000, ',')) 
{
	print '<tr>';
	for ($i = 0, $j = count($csv_line); $i < $j; $i++)
	{
	//	print '<td>'.htmlentities($csv_line[$i]).'</td>';
		print $csv_line[$i];
	}
print "</table>\n";
fclose($handle) or die ("cant close file");
}
*/


$handle = fopen('np.csv', 'r');
$handle2 = fopen('np-new.csv', 'w');
$text = fread($handle, filesize('np.csv')); 
$text = iconv("UTF-16", "UTF-8", $text);
fwrite($handle2, $text);
fclose($handle);
fclose($handle2);


$array = array(array());
// рабочий вариант чтения csv file
$row = 1;
if (($handle = fopen("np-new.csv", "r")) !== FALSE) 
{
	//$text = fread($handle, filesize('np.csv')); 
	//$text = iconv("UTF-16", "UTF-8", $text);
    while (($data = fgetcsv($handle, 1000, "\t")) !== FALSE) 
    {
        $num = count($data);
        echo "<p> $num полей в строке $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++)
        {
        	
            $array[$row][$c] = $data[$c];
            
        
        }
    }
    fclose($handle);
}

$arrayString = array();
$count = count($array);
$counter = 0;
DEFINE ('OTPRAVITEL', 'Відправник');
DEFINE ('POLUCHATEL', 'Отримувач');

for ($i = 3; $i <= $count; $i++)
{
$nameСlient = $array[$i][11]; // кто будет получатель
$secondNameСlient = $array[$i][8]; // кто будет получатель (приватна особа)
$dateDeparture = $array[$i][4]; //дата отправления
$enNumber = $array[$i][0]; // номер декл 
$sklad = $array[$i][10]; // какой склад 
$deliveryDate = $array[$i][20]; // когда будет  
$weight = $array[$i][13]; // вес посылки
$payment = $array[$i][29];
$price = $array[$i][16];
$counter++;
$result = '';

if($payment == OTPRAVITEL)
{
$result = 'Доставка оплачена';
} else {
$result = 'За доставку: '.$price."грн.";
}
$stringClient = $counter."  ".$nameСlient." // ".$secondNameСlient."\n\nДобрый день, заказ отправили {$dateDeparture}, Новая Почта - {$sklad}, номер декларации {$enNumber}, {$result}, вес {$weight}кг, будет у вас {$deliveryDate}\n\n\n"; 

$arrayString[$i] = $stringClient;
//var_dump($arrayString);
}
$handle4 = fopen('mail.txt', 'w');
fwrite($handle4, serialize($arrayString));
fclose($handle4);

// алгоритм такой, в конце должен будет создать быть массив многомерный, с уже заполеными стринт-клиент и его мы потом пишем в файл 
// выбираем из массива с данными определенные поля подставляем их в стринг-клиент, и идем дальше пока не наступит конец массива

print_r($arrayString);
print_r($array);

 
// {$name_client} $array[3][11] кто будет получатель
// {$dateDeparture} $array[3][4] дата отправления
// {$enNumber} $array[3][0] - номер декл 
// {$sklad} $array[3][10] какой склад 
// {$deliveryDate} $array[3][20] когда будет  
// {$weight} $array[3][13] вес посылки
// {$payment} $array[3][29] кто платит если Клиент то значение нулевое, если отправитель оплачивает то пишем слово оплачено Відправник Отримувач


// $stringClient = {$name_client}</br>
// Добрый день, заказ отправили {$dateDeparture}
// Новая Почта - {$sklad} 
// номер декларации {$enNumber}, {$payment}, вес {$payment} кг 
// будет у вас {$deliveryDate} </br></br></br>



?>

</head>
</html>