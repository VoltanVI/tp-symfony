<?php
// Démarrer ou reprendre une session
session_start();

// Supprimer toutes les variables de session
$_SESSION = array();

// Détruire la session
session_destroy();

// Rediriger l'utilisateur vers la page de connexion ou d'accueil
header("Location: index.html.twig");
exit;
?>
