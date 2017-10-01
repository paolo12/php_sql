<?php
function weather_file(){
	$city_id = 498817;
	$app_id = 'a290ddae662210f3c5b0d9aaaa092849';
	
	$content = file_get_contents('http://api.openweathermap.org/data/2.5/weather?id='.strval($city_id).'&APPID='.$app_id);
	file_put_contents('cache.txt', $content);
	$w_file = file_get_contents('cache.txt');
	return $w_file;
}

$file = 'cache.txt';

if (file_exists($file) == false) {
	$file = weather_file();
}
else{
	$diff = time() - filemtime($file);
	if ($diff > 3600){
		$file = weather_file();
	}
	else{
		$file = file_get_contents('cache.txt');
	}
}

$data = json_decode($file, true);
$city = 'City: '.$data['name'];
$temperature = 'Temperature, C: '.strval(intval($data['main']['temp']) - 273.15);
$cloudiness = 'Cloudiness, %: '.strval($data['clouds']['all']);

echo $city.PHP_EOL;
echo $temperature.PHP_EOL;
echo $cloudiness.PHP_EOL;
?>
