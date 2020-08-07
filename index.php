<?php 
// On crée un cookie de session (qui disparait a la fermeture du navigateur)
setcookie('nomDuCookie', 'Contenu du cookie');

// Créer un cookie valable 1 heure
setcookie('cookie1heure', 'Contenu', strtotime('+1 hour'));

// Définir l'attribut 'SameSite'
setcookie('CookieSameSite', 'Contenu', [
    'Samesite' => 'Strict',
    'expires' => strtotime('+1 day')
]);