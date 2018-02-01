<?php

$animals = array(
    "Eurasian" => array("Ursus arctos", "Meles meles", "Martes zibellina", "Viverra lutra Linnaeus"),
    "Africa" => array("Lycaon pictus somalicus", "Papio cynocephalus", "Camelus", "Panthera leo"),
    "Australia" => array("Macropus", "Ornithorhynchus anatinus", "Tachyglossus aculeatus aculeatus", "Sarcophilus laniarius"),
    "NorthAmerica" => array("Hystrix cristata", "Heloderma suspectum cinctum", "Mephitis", "Canis latrans"),
    "SouthAmerica" => array("Lama", "Leopardus pardalis", "Puma concolor anthonyi", "Folivora")
);

    $newAnimals = array();
    $firstWordInContinent = array();
foreach($animals as $continent => $animalName) {
    foreach ($animalName as $value) {
        if (strpos($value, ' ') !== false && substr_count($value, ' ') <= 1) {
            $newAnimals[$continent][] = $value;
            list($first, $second) = explode(' ', $value, 2);
            $firstWord[] = $first;
            $secondWord[] = $second;
            $firstWordInContinent[$continent][] = $first;
        }
    }
}

shuffle($firstWord);
shuffle($secondWord);

    $fantasticAnimals = array();
for ($i = 0; $i < count($firstWord); $i++) {
    $fantasticAnimals[] = $firstWord[$i] . " " . $secondWord[$i];
    echo "$fantasticAnimals[$i]</br>";
}
    $newFantasticAnimals = array();
foreach($firstWordInContinent as $nameContinent => $firstWordItem) {
    foreach ($firstWordItem as $item){
        foreach ($fantasticAnimals as $name) {
            if (strpos($name, "$item") !== false) {
                $newFantasticAnimals[$nameContinent][] = $name;
            }
        }
    }
}

foreach($newFantasticAnimals as $continentName => $nameAnimals) {
    echo '<h2>' . "$continentName" . '</h2>';
    foreach ($nameAnimals as $key => $value) {
        if ($key===0) {
            echo "$value";
        } else {
            echo ', ' . "$value";
        }
    }
}