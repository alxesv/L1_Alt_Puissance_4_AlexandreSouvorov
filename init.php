

<?php
//  Afficher toutes les erreurs dans le PHP
error_reporting(E_ALL);
ini_set('display_errors', 'On');

// Relier la base de donneés et lancer une session 
include 'includes/database.inc.php';
session_start();
?>