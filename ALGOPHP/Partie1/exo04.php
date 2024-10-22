<h2>Exercice 4</h2>

<?php
    $phrase = "engage le jeu que je le gagne";

    $palin = str_replace(" ", "", $phrase);
    $nilap = strrev($palin);
    

    echo $palin;
    echo "</br>";
    echo $nilap;
    echo "</br>";

    if ($palin == strrev($palin)) {
        echo $phrase." est un palindrome.";
    } else {
        echo $phrase." n'est pas un palindrome.";
    }

?>