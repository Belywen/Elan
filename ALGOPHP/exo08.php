<h2>Exercice 7</h2>

<?php
echo "Première proposition : ";
echo "</br>";

for($nbTable = 0; $nbTable <= 8; $nbTable++) {
    echo "Table de ".$nbTable." : ";
    echo "</br>";

    for ($nb = 0; $nb <= 10; $nb++) {
        $calcul = $nbTable * $nb;
        echo $nb." x ".$nbTable. " = ".$calcul;
        echo "</br>";
   }
   echo "</br>";
}

echo "</br>";
echo "Deuxième proposition : ";
echo "</br>";
$nbTable = 0;

while ($nbTable <= 10) {
    echo "Table de ".$nbTable." : ";
    echo "</br>";

    for ($nb = 0; $nb <= 10; $nb++) {
        $calcul = $nbTable * $nb;
        echo $nb." x ".$nbTable. " = ".$calcul;
        echo "</br>";
}
    $nbTable++;
    echo "</br>";
}

echo "</br>";
echo "Essai foreach : ";
foreach(range(0, 10) as $nbTable) { 
    echo "Table de ".$nbTable." : ";
    echo "</br>";

    for ($nb = 0; $nb <= 10; $nb++) {
        $calcul = $nbTable * $nb;
        echo $nb." x ".$nbTable. " = ".$calcul;
        echo "</br>";
}
    echo "</br>";
}
?>