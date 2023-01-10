<?php
// Vérifier si les paramètres "language" et "server" existent
if(isset($_GET['language']) && isset($_GET['server'])) {
    // Récupérer les valeurs des paramètres
    $language = $_GET['language'];
    $server = $_GET['server'];

    echo "Langage: " . $language . " Server: " . $server;
} else {
    echo "Les paramètres Langage et Server n'existent pas";
}