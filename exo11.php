<h2>Exercice 11</h2>
<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.
Exemple :
formaterDateFr("2018-02-23");
</p>
<h2>Résultat</h2>
<?php

function formaterDateFr($date) { //https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Intl/DateTimeFormat
    // $date = new DateTime($date);
    // $formatter = new IntlDateFormatter(
    // 'fr_FR',
    // IntlDateFormatter::FULL,
    // IntlDateFormatter::NONE);
    // echo $formatter->format($date);
    $formatter = new IntlDateFormatter('fr_FR',
    IntlDateFormatter::LONG,
    IntlDateFormatter::NONE,
    'Europe/Paris',
    IntlDateFormatter::GREGORIAN);
    return $formatter ->format($date);
}

formaterDateFr("2018-02-23");