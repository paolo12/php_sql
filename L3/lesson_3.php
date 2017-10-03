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
		$temp_animal = explode(' ', $animal);
		if(count($temp_animal) == 2){
			$first_name[] = $temp_animal[0];
			$last_name[] = $temp_animal[1];
		};
	}
}

shuffle($last_name);

$temp_result = array_map(null, $first_name, $last_name);

foreach($temp_result as $animal){
	print(implode(" ", $animal).'<br>'.PHP_EOL);
	$new_animals[] = implode(" ", $animal);
}
?>
