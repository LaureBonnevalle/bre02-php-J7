<?php

session_start();




?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Session</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <form method="post" action="nickname.php">
            <fieldset>
                <label for="nickName">
                    Pseudo
                </label>
                <input type="text" name="nickName" id="nickName" />
            </fieldset>
             <fieldset>
                <label for="firstName">
                    Prénom
                </label>
                <input type="text" name="firstName" id="firstName" />
            </fieldset>
            <fieldset>
                <label for="lastName">
                    Nom
                </label>
                <input type="text" name="lastName" id="lastName" />
            </fieldset>
            <fieldset>
                <button type="submit">Envoyer</button>
            </fieldset>
            <a href="logout.php">Déconnexion</a>
        </form>
    </body>
</html>
