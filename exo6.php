<h2>Exercice 6</h2>
<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau 
de valeurs.
Exemple :
$elements = ["Monsieur","Madame","Mademoiselle"];
alimenterListeDeroulante($elements);
</p>
<h2>Résultat</h2>
<?php

$elements = ["Monsieur","Madame","Mademoiselle",];

function alimenterListeDeroulante($elements){
    echo '<select name="tt" id="tt">';
    foreach($elements as $element){
        echo '<option value="'.$element.'">'.$element.'</option>';
    }
    echo '</select>';
}

alimenterListeDeroulante($elements);