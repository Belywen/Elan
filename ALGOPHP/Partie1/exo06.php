<h2>Exercice 6</h2>

<?php
    $prixU = 9.99;
    $quantite = 5;
    $tva = 0.2;
    $calculTva = $prixU * $tva;
    $total = ($prixU + $calculTva) * $quantite;


    echo "Affichage :";
    echo "</br></br>";
    echo "Prix unitaire de l'article : ".$prixU." €";
    echo "</br>";
    echo "Quantité : ".$quantite;
    echo "</br>";
    echo "Taux de TVA : ".$tva;
    echo "</br>";
    echo "Le montant de la facture à régler est de : ".$total." €"; 

?>