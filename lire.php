<?php
// Afficher tous les cookies
echo"<pre>";
var_dump($_COOKIE);
echo"</pre>";

// Afficher le contenu d'un cookie en particulier
echo "<p>".$_COOKIE['CookieSameSite']."</p>";