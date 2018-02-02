<?php

$animals = [
    "Eurasian" => ["Ursus arctos", "Meles meles", "Martes zibellina", "Viverra lutra Linnaeus"],
    "Africa" => ["Lycaon pictus somalicus", "Papio cynocephalus", "Camelus", "Panthera leo"],
    "Australia" => ["Macropus", "Ornithorhynchus anatinus", "Tachyglossus aculeatus aculeatus", "Sarcophilus laniarius"],
    "NorthAmerica" => ["Hystrix cristata", "Heloderma suspectum cinctum", "Mephitis", "Canis latrans"],
    "SouthAmerica" => ["Lama", "Leopardus pardalis", "Puma concolor anthonyi", "Folivora"]
];

$newAnimals = [];
$firstWord = [];
$secondWord = [];
$firstWordInContinent = [];
foreach($animals as $continent => $animalName) {
    foreach ($animalName as $value) {
        /*if (strpos($value, ' ') !== false && substr_count($value, ' ') <= 1)*/
        if (str_word_count($value) === 2) {
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

$fantasticAnimals = [];
for ($i = 0; $i < count($firstWord); $i++) {
    $fantasticAnimals[] = $firstWord[$i] . " " . $secondWord[$i];
    echo "$fantasticAnimals[$i]</br>";
}

$newFantasticAnimals = [];
foreach($firstWordInContinent as $nameContinent => $firstWordItem) {
    foreach ($firstWordItem as $item){
        foreach ($fantasticAnimals as $name) {
            if (strpos($name, $item) !== false) {
                $newFantasticAnimals[$nameContinent][] = $name;
            }
        }
    }
}

$fantasticName = [];
foreach($newFantasticAnimals as $continentName => $nameAnimals) {
    $fantasticName = implode(', ', $nameAnimals);
    echo '<h2>' . "$continentName" . '</h2>';
    echo $fantasticName;
    /*foreach ($nameAnimals as $key => $value) {
        if ($key===0) {
            echo "$value";
        } else {
            echo ', ' . "$value";
        }
    }*/
}