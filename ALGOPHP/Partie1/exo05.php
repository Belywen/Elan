<h2>Exercice 5</h2>

<?php
$phraseSolde = "Montant en francs : ";
$solde = 100;
$devise = " francs = ";
$symbole = " €";

$convertisseur = round($solde / 6.5596, 2);

echo $phraseSolde.$solde;
echo "</br>";
echo $solde.$devise.$convertisseur.$symbole;

?>