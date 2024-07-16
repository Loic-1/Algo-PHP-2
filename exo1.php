<h2>Exercice 1</h2>
<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de 
caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;</p>
<h2>Résultat</h2>
<?php

$texte = "Mon texte en paramètre";

function convertirMajRouge($texte) {
    $texte = mb_strtoupper($texte); //mb_strtoupper met le 'è' en 'È'
    $texte = strtoupper($texte);//
    return '<span style="color:red;">'.$texte.'</span>';
}

echo convertirMajRouge($texte);