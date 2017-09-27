<?php

#Link: http://api.openweathermap.org/data/2.5/weather?id=498817&APPID=a290ddae662210f3c5b0d9aaaa092849

$file = file_get_contents('http://api.openweathermap.org/data/2.5/weather?id=498817&APPID=a290ddae662210f3c5b0d9aaaa092849'); // в примере все файлы в корне
$data = json_decode($file, true); 
#var_dump($data);
$city = 'City: '.$data['name'];
$temperature = 'Temperature, C: '.strval(intval($data['main']['temp']) - 273.15);
$cloudiness = 'Cloudiness, %: '.strval($data['clouds']['all']);

echo $city.PHP_EOL;
echo $temperature.PHP_EOL;
echo $cloudiness.PHP_EOL;
?>
