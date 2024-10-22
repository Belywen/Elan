<h2>Exercice 9</h2>

<?php
$MaPayer = 152;
$MVerse = 200;
$RaPayer = $MVerse - $MaPayer;
$billet10 = 0;
$billet5 = 0;
$piece2 = 0;
$piece1 = 0;



echo "Affichage : ";
echo "</br></br>";

echo "Montant à payer : ".$MaPayer." €";
echo "</br>";
echo "Montant versé : ".$MVerse." €";
echo "</br>";
echo "Reste à payer : ".$RaPayer." €";
echo "</br>";
echo "**********************************";
echo "</br>";
echo "Rendue de monnaie : ";
echo "</br>";
echo $billet10." Billets de 10 € - ".$billet5." Billets de 5 € - ".$piece2." Pièces de 2 € - ".$piece1." Pièces de 1 €";

?>