<h2>Exercice 5</h2>
<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.
Exemple :
$nomsInput = ["Nom","Prénom","Ville"];
afficherInput($nomsInput);
</p>
<h2>Résultat</h2>
<?php

$nomsInput = ["Nom","Prénom","Ville"];

function afficherInput($nomsInput){
    //echo '<fieldset>';
    foreach($nomsInput as $field){
        echo '<label for="'.$field.'" style="font-family: sans-serif;">'.$field.'</label><br>';
        echo '<input type="text" id="'.$field.'" name="'.$field.'"><br><br>';
    }
    //echo '</fieldset>';
}

afficherInput($nomsInput);