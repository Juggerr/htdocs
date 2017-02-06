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
$filename = "test.txt";

print wordwrap($texter, 10,  "<br />\n");
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

/*
// рабочий вариант чтения csv file
$row = 1;
if (($handle = fopen("np.csv", "r")) !== FALSE) 
{
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
    {
        $num = count($data);
        echo "<p> $num полей в строке $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++)
        {
            echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
}*/



$csv = array_map('str_getcsv', file('np.csv'));
print_r ($csv);
 

?>

</head>
</html>