<?php
// Vérifier si les paramètres "lastname" et "firstname" existent
if(isset($_GET['lastname']) && isset($_GET['firstname'])) {
    // Récupérer les valeurs des paramètres
    $lastname = $_GET['lastname'];
    $firstname = $_GET['firstname'];

    echo "Bonjour $firstname $lastname";
} else {
    echo "Les paramètres n'existent pas";
}