<h2>Exercice 11</h2>
<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.
Exemple :
formaterDateFr("2018-02-23");
</p>
<h2>Résultat</h2>
<?php

function formaterDateFr($date) {
    return strftime('%A %d %B %Y', strtotime($date));
}

formaterDateFr("2018-02-23");