<h2>Exercice 4</h2>
<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra 
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un 
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/
Le tableau passé en argument sera le suivant :
$capitales = ["France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid"];
</p>
<h2>Résultat</h2>
<?php

$capitales = ["France"=>"Paris","USA"=>"Washington","Allemagne"=>"Berlin","Italie"=>"Rome","Espagne"=>"Madrid"];

function afficherTableHTML($capitales) {
    ksort($capitales);
    echo '<table border="1" style="border-collapse: collapse;">';
    echo '<tr><th style="font-weight: bold;">Pays</th><th style="font-weight: bold;">Capitale</th></tr>';
    foreach($capitales as $pays => $capitale){
        echo '<tr>';
        echo '<td>'.strtoupper($pays).'</td>';
        echo '<td>'.$capitale.'</td>';
        echo '<td>'.'<a href="https://fr.wikipedia.org/wiki/'.$capitale.'" target="_blank">'.$capitale.'</a>'.'</td>';
        echo '</tr>';
    }
    echo '</table>';
}

afficherTableHTML($capitales);