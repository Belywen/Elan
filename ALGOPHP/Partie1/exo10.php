<h2>Exercice 10</h2>

<?php
$MaPayer = 152;
$MVerse = 200;
$RaPayer = $MVerse - $MaPayer;
$billet10 = 0;
$billet5 = 0;
$piece2 = 0;
$piece1 = 0;

echo "Méthode demandée par Mickael : ";
echo "</br>";
// $billet10 = intdiv($RaPayer, 10);
// $RaPayer = $RaPayer - $billet10 * 10;
// $billet5 = intdiv($RaPayer, 5);
// $RaPayer = $RaPayer - $billet5 * 5;
// $piece2 = intdiv($RaPayer, 2);
// $RaPayer = $RaPayer - $piece2 * 2;
// $piece1 = intdiv($RaPayer, 1);
// $RaPayer = $RaPayer - $piece1 * 1;

echo "</br>";
echo "Méthode commencée et finie avec le while : ";
echo "</br>";
// while ($RaPayer != 0) {
//     if ($RaPayer >= 10) {
//         $billet10 = floor($RaPayer / 10);
//         $RaPayer = $RaPayer - $billet10 * 10; 
//     } else if ($RaPayer >= 5) {
//         $billet5 = floor($RaPayer / 5); 
//         $RaPayer = $RaPayer - $billet5 * 5; 
//     } else if ($RaPayer >= 2) {
//         $piece2 = floor($RaPayer / 2); 
//         $RaPayer = $RaPayer - $piece2 * 2;        
//     } else if ($RaPayer >= 1) {
//         $piece1 = floor($RaPayer / 1);
//         $RaPayer = $RaPayer - $piece1 * 1;        
//     } 
// }


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