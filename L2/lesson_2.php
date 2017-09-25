<?php
$x = rand(0,100);
echo "Число = ".$x;
echo PHP_EOL;
$y1 = $y2 = 1;

while (($y1 < $x) or ($y1 == $x)){
	if ($y1 == $x){
		echo "Задуманное число входит в числовой ряд";
		echo PHP_EOL;
		break;
	}
	else{
		$y3 = $y1;
		$y1 += $y2;
		$y2 = $y3;
		if ($y1 > $x){
			echo "Задуманное число НЕ входит в числовой ряд";
			echo PHP_EOL;
			break;
		}
	}
}
?>
