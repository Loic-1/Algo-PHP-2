<h2>Exercice 8</h2>
<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
Exemple :
repeterImage($url,4);
</p>
<h2>Résultat</h2>
<?php

$url = "http://my.mobirise.com/data/userpic/764.jpg";

function repeterImage($url, $n) {
    for($i = 0; $i < $n; $i++){
        echo '<img src="'.$url.'" alt="">';
    }
}

repeterImage($url,4);