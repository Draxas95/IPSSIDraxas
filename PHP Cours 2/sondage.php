<?php 

// Ici on vérifie que tous les champs soient bien remplis une fois le formulaire soumis (sinon erreur)
// Une fois le tout vérifié on récupère les infos entrées par le user dans la superglobale $_POST


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sondage POST</title>
</head>
<body>

    <h1>Sondage avec POST</h1>

    <form method="POST">

        <!-- Coder ici -->

        <!-- Exemple de questions avec les choix possibles  -->
        <h2>Quel est votre langage favori ?</h2>
        <input type="radio" name="language" value="HTML"> HTML
        <input type="radio" name="language" value="CSS"> CSS
        <input type="radio" name="language" value="PHP"> PHP

        <!-- Coder ici aussi  -->

    </form>

    <section class="resultats">

        <!-- Ici on affichera le résumé des choix du sondage  -->

    </section>
    
</body> 
</html>