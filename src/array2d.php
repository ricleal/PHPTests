/*
Run this in http://writecodeonline.com/php/

*/

$array2d = array(
    array(0, 1, 2, 3, 4, 5),
    array(6, 7, 8, 9,10,11),
);

print_r($array2d);

foreach ($array2d as $row => $col) {
	foreach ($col as $elem){
		echo $elem.', ';
   	}
	echo "\r\n";
}

