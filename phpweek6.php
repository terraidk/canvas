<?php

// $tijd = date("3:12");
// $tijd = date("13:12");
$tijd = date("H:i");
echo "het is $tijd" . "<br>";

if ($tijd >= 6 && $tijd <= 12) {
    echo "Goedemorgen." . "<br> <br>";
} elseif ($tijd >= 12 && $tijd <= 18) {
    echo "Goedemiddag." . "<br> <br>";
} elseif ($tijd >= 18 && $tijd <= 24) {
    echo "Goedeavond." . "<br> <br>";
} else {
    echo "Goedenacht." . "<br> <br>";
}


$getal1 = 20;
$getal2 = 10;
function berekenGemiddelde($getal1, $getal2) {
    $gemiddelde = ($getal1 + $getal2) / 2;
    echo "Het gemiddelde van $getal1 en $getal2 is: $gemiddelde" . "<br>";
}
berekenGemiddelde($getal1, $getal2);

function dagenover() {
    $datum = new DateTime();
    $eindeJaar = new DateTime(date('Y') . '-12-31');
    $verschil = $eindeJaar->diff($datum);
    $dagen = $verschil->days;
    return $dagen;
}

echo "Vandaag is het " . date("d/m/Y") . "<br>";
$aantalDagen = dagenover();
echo "Aantal dagen tot het einde van het jaar: " . $aantalDagen . "<br>";

function berekenTotaleLengte($strings) {
    $totaleLengte = 0;
    foreach ($strings as $string) {
      $totaleLengte += strlen($string);
    }
    return $totaleLengte;
}
  
$strings = array("discord", "PHP", "canvas", "booleanvariable", "baller", "geklemd");
$totaleLengte = berekenTotaleLengte($strings);
echo "Totale lengte van de strings: " . $totaleLengte;

?>