<?php 
for ($i = 0; $i <= 50; $i++) {
  echo $i . PHP_EOL;
}

$klasgenoten = ["Naam1", "Naam2", "Naam3", "Naam4", "Naam5", "Naam6", "Naam7", "Naam8", "Naam9", "Naam10"];

foreach ($klasgenoten as $naam) {
  echo $naam . PHP_EOL;
}


$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];

for ($i = 0; $i < count($maanden); $i++) {
  echo 'Maand '.($i+1).' is '.$maanden[$i] . PHP_EOL;
}

$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];

foreach ($maanden as $index => $maand) {
  echo 'Maand '.($index+1).' is '.$maand . PHP_EOL;
}


?>