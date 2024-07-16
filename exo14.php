<h2>Exercice 14</h2>
<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une 
adresse e-mail a le bon format.
</p>
<h2>Résultat</h2>
<?php

$mail = "elan@elan-formation.fr";

if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
    echo "L’adresse $mail est une adresse e-mail valide";
}
else{
    echo "L’adresse $mail n'est pas une adresse e-mail valide";
}