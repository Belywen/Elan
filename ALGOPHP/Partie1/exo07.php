<h2>Exercice 7</h2>

<?php
    $age = 8;

    echo "Affichage : ";
    echo "</br></br>";

    if ($age >= 12) {
        echo "L'enfant qui a ".$age." ans appartient à la catégorie 'Cadet'";
    } else if ($age >= 8 && $age <= 9) {
            echo "L'enfant qui a ".$age." ans appartient à la catégorie 'Pupille'";    
    } else if ($age >= 6 && $age <= 7) {
        echo "L'enfant qui a ".$age." ans appartient à la catégorie 'Poussin'";
    } else {
        echo "L'enfant qui a ".$age." n'entre dans aucune catégorie.";
    }

   

    
?>