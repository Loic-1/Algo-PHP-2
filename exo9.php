<h2>Exercice 9</h2>
<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
Exemple :
afficherRadio($nomsRadio);
</p>
<h2>Résultat</h2>
<?php

$nomsRadio = [
"Madame" => "Féminin",
"Monsieur" => "Masculin",
"Mademoiselle" => "Féminin"
];

function afficherRadio($nomsRadio) {
    foreach($nomsRadio as $nom => $sexe){
        echo '<input type="radio" id="'.$nom.'" name="'.$sexe.'" value="'.$sexe.'" />';
        echo '<label for="'.$nom.'">'.$sexe.'</label><br>';
    }
}

afficherRadio($nomsRadio);