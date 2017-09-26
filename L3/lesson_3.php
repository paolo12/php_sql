<?php
$eurasia = ['Herpestes ichneumon', 'Procyon lotor', 'Alces alces', 'Erinaceus europaeus'];
$africa = ['Herpestes ichneumon', 'Hyaena hyaena', 'Genetta genetta', 'Jaculus jaculus'];
$north_america = ['Panthera onca', 'Spilogale gracilis', 'Martes pennanti', 'Bison bison'];
$south_america = ['Tayassu pecari', 'Nasua', 'Saimiri sciureus', 'Cuniculus paca'];
$australia = ['Onychogalea lunata', 'Petaurus breviceps', 'Notoryctes', 'Perameles bougainville'];
$antarctica = ['Globicephala melas', 'Lobodon carcinophagus', 'Phocoena dioptrica', 'Orcinus orca'];

$animals = [$eurasia , $africa, $north_america, $south_america, $australia, $antarctica];

$double_name_animals = [];
$all_animals_name = [];
$count_names = [];

foreach($animals as $continent){
    foreach($continent as $animal){
        if(strpos($animal, ' ') and substr_count($animal,' ') < 2){
            $double_name_animals[] = $animal;
        };
    }
}

foreach($double_name_animals as $dn_animal){
    $all_animals_name[] = explode(" ", $dn_animal);
}

foreach ($all_animals_name as $i => $new_animal) {
    ${"new_animal{$i}"} = $new_animal; 
}

foreach($double_name_animals as $aanimal){
    print_r($aanimal);
    echo PHP_EOL;
}

/*
for ($i = 0; $i < count($all_animals_name); $i++) {
    $count_names[]= $i;
}

for ($i = 0; $i < count($all_animals_name); $i++) {
    $n = rand(0, count($all_animals_name));
    while (in_array($n, $count_names) == false){
        $new_animals[] = $all_animals_name[$i][0].' '.$all_animals_name[$n][1];
        break;
        $n = rand(0, count($all_animals_name));
    }
    unset($count_names[$n]);
}

foreach($new_animals as $new_animal){
    print_r($new_animal);
    echo PHP_EOL;
}
*/
?>
