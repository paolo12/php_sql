<?php
$eurasia = ['Herpestes ichneumon', 'Procyon lotor', 'Alces alces', 'Erinaceus europaeus'];
$africa = ['Herpestes ichneumon', 'Hyaena hyaena', 'Genetta genetta', 'Jaculus jaculus'];
$north_america = ['Panthera onca', 'Spilogale gracilis', 'Martes pennanti', 'Bison bison'];
$south_america = ['Tayassu pecari', 'Nasua', 'Saimiri sciureus', 'Cuniculus paca'];
$australia = ['Onychogalea lunata', 'Petaurus breviceps', 'Notoryctes', 'Perameles bougainville'];
$antarctica = ['Globicephala melas', 'Lobodon carcinophagus', 'Phocoena dioptrica', 'Orcinus orca'];
$world = [$eurasia , $africa, $north_america, $south_america, $australia, $antarctica];

foreach($world as $continent){
	foreach($continent as $animal){
		if(strpos($animal, ' ') and substr_count($animal, ' ') < 2){
			$double_name_animals[] = $animal;
		};
	}
}

foreach($double_name_animals as $dn_animal){
	$all_animals_name[] = explode(" ", $dn_animal);
}

foreach($all_animals_name as $key => $value){
	$first_name[] = $value[0];
	$last_name[] = $value[1];
}

shuffle($last_name);

$temp_result = array_map(null, $first_name, $last_name);

foreach($temp_result as $animal){
	$new_animals[] = implode(" ", $animal);
}

foreach($new_animals as $animal){
	print($animal.PHP_EOL);
}
?>
