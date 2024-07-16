<h2>Exercice 9</h2>
<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
Exemple :
afficherRadio($nomsRadio);
</p>
<h2>Résultat</h2>
<?php
//PAS COMPRIS
$nomsRadio = [
"Monsieur" => "Masculin",
"Madame" => "Féminin",
"Mademoiselle" => "Féminin"
];

function afficherRadio($nomsRadio) {
    foreach($nomsRadio as $nom){
        echo '<input type="radio" id="'.$nom.'" name="'.$nom.'" value="'.$nom.'" />';
        echo '<label for="'.$nom.'">'.$nom.'</label><br>';
    }
}

afficherRadio($nomsRadio);