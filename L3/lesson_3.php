<?php
$eurasia = ['Herpestes ichneumon', 'Procyon lotor', 'Alces alces', 'Erinaceus europaeus'];
$africa = ['Herpestes ichneumon', 'Hyaena hyaena', 'Genetta genetta', 'Jaculus jaculus'];
$north_america = ['Panthera onca', 'Spilogale gracilis', 'Martes pennanti', 'Bison bison'];
$south_america = ['Tayassu pecari', 'Nasua', 'Saimiri sciureus', 'Cuniculus paca'];
$australia = ['Onychogalea lunata', 'Petaurus breviceps', 'Notoryctes', 'Perameles bougainville'];
$antarctica = ['Globicephala melas', 'Lobodon carcinophagus', 'Phocoena dioptrica', 'Orcinus orca'];
$world = [$eurasia , $africa, $north_america, $south_america, $australia, $antarctica];

$first_name = [];
$last_name = [];
$new_animals = [];

foreach($world as $continent){
	foreach($continent as $animal){
		if(strpos($animal, ' ') and substr_count($animal, ' ') < 2){
			$n = strripos($animal, ' ');
			$len = strlen($animal);
			$first_name[] = substr($animal, 0, $n);
			$last_name[] =  substr($animal, $n + 1);
		};
	}
}

shuffle($last_name);

$temp_result = array_map(null, $first_name, $last_name);

foreach($temp_result as $animal){
	print(implode(" ", $animal).PHP_EOL);
	$new_animals[] = implode(" ", $animal);
}
?>
