<h2>Exercice 7</h2>
<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non.
Exemple :
genererCheckbox($elements);
//où $elements est un tableau associatif clé => valeur avec 3 entrées.
</p>
<h2>Résultat</h2>
<?php

$elements = [
    "choix 1" => "oui",
    "choix 2" => "non",
    "choix 3" => "oui"
];

function genererCheckbox($elements) {
    foreach($elements as $choice => $check){
        $checked = $check == "oui" ? "checked" : "";
        echo '<input type="checkbox" id="'.$choice.'" name="'.$choice.'" '.$checked.'>';
        echo '<label for="'.$choice.'">'.$choice.'</label><br>';
    }
}

genererCheckbox($elements);

/*<input type="checkbox" id="exampleCheckbox" name="exampleCheckbox">
<label for="exampleCheckbox">Option 1</label>
*/
/*.$check == "oui" ? "checked" : "".*/