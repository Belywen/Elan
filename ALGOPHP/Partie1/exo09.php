<h2>Exercice 9</h2>

<?php
echo "Affichage : ";
echo "</br>";

$age = 10;
$sexe = "M";

if (($sexe == "F" && ($age >= 18 && $age <= 35)) || ($sexe == "M" && $age > 20)) {
    echo "La personne est imposable.";
} else {
    echo "La personne est non imposable.";
}
?>