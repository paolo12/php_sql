<?php
#Link: http://api.openweathermap.org/data/2.5/weather?id=498817&APPID=a290ddae662210f3c5b0d9aaaa092849

$city_id = 498817;
$app_id = 'a290ddae662210f3c5b0d9aaaa092849';
$file = 'cache.txt';

if (file_exists($file) == false) {
	$content = file_get_contents('http://api.openweathermap.org/data/2.5/weather?id='.strval($city_id).'&APPID='.$app_id);
	file_put_contents('cache.txt', $content);
	$file = file_get_contents('cache.txt');
}
else{
	$diff = time() - filemtime($file);
	if ($diff > 3600){
		$content = file_get_contents('http://api.openweathermap.org/data/2.5/weather?id='.strval($city_id).'&APPID='.$app_id);
		file_put_contents('cache.txt', $content);
		$file = file_get_contents('cache.txt');
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
