<h2>Exercice 2</h2>
<p>Soit le tableau suivant :
$capitales = 
[France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);</p>
<h2>Résultat</h2>
<?php

$capitales = ["France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];

function afficherTableHTML($capitales) {
    ksort($capitales);
    echo '<table border="1" style="border-collapse: collapse;">';
    echo '<tr><th style="font-weight: bold;">Pays</th><th style="font-weight: bold;">Capitale</th></tr>';
    foreach($capitales as $pays => $capitale){
        echo '<tr>';
        echo '<td>'.strtoupper($pays).'</td>';
        echo '<td>'.$capitale.'</td>';
        echo '</tr>';
    }
    echo '</table>';
}

afficherTableHTML($capitales);