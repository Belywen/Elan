<h2>Exercice 4</h2>

<?php
    $phrase = "Engage le jeu que je le gagne";
    echo $phrase;
    echo "</br></br>";

    $phraseMin = strtolower($phrase);

    $palin = str_replace(" ", "", $phraseMin);
    $nilap = strrev($palin);
    

    echo $palin;
    echo "</br></br>";
    echo $nilap;
    echo "</br></br>";

    if ($palin == strrev($palin)) {
        echo $phrase." est un palindrome.";
    } else {
        echo $phrase." n'est pas un palindrome.";
    }

?>