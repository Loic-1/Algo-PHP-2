<h2>Exercice 12</h2>
<p>La fonction var_dump($variable) permet d’afficher les informations d’une variable.
Soit le tableau suivant : 
$tableauValeurs=[true,"texte",10,25.369,["valeur1","valeur2"]];
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.
</p>
<h2>Résultat</h2>
<?php

$tableauValeurs=[true,"texte",10,25.369,["valeur1","valeur2"]];

foreach($tableauValeurs as $valeur){
    echo var_dump($valeur)."<br>";
}