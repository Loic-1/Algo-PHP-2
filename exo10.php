<h2>Exercice 10</h2>
<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit).
</p>
<h2>Résultat</h2>
<?php

$fields = ["nom", "prénom", "adresse e-mail", "ville", "sexe"];
$jobs = ["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"];

foreach($fields as $field){;
    echo '<label for="'.$field.'">'.$field.'</label><br>';
    echo '<input type="text" id="'.$field.'" name="'.$field.'"><br>';
}


echo '<br><select name="tt" id="tt">';
foreach ($jobs as $job){
    echo '<option value="'.$job.'">'.$job.'</option>';
}
echo '</select>';

echo '<br><br><button style="cursor: pointer;">SUBMIT</button>';