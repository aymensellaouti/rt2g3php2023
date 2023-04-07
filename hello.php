<?php
session_start();
if (!isset($_SESSION['nbVisite'])) {
//si 1ere visite => 'Bienvenu chez nous'
    echo "Bienvenu chez nous";
    $_SESSION['nbVisite'] = 1;
} else {
//si n eme visite => 'Merci pour votre fidélité c est votre neme visite'
    $_SESSION['nbVisite'] += 1;
    $nbVisite = $_SESSION['nbVisite'];
    echo "Merci pour votre fidélité c est votre $nbVisite éme visite";
}

