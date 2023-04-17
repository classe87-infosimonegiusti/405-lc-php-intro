<?php

    $stringaA = 'Ciao';
    $stringaB = 'Mondo';

    $concatenazione = $stringaA . ' ' . $stringaB; // => $concatenazione = "$stringaA $stringaB";

    $stringa = 'Nel mezzo del cammin di nostra vita';

    $risultato = explode(' ', $stringa);

    echo '<pre>';
    var_dump($risultato);
    echo '</pre>';

    echo "<h1>Ciao</h1>";

    echo 'La stringa è lunga: ' . strlen($stringa);


?>