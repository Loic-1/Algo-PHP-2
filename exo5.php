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
    foreach($nomsInput as $field){
        echo '<p style="font-family: sans-serif;">'.$field.'</p>';
        echo '<input type="text"><br><br>';
    }
}

afficherInput($nomsInput);