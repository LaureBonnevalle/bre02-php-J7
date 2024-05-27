<?php

?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Exercices sessions</title>
    </head>
    <body>
        <form action="decrypt_password.php" method="post">
            <fieldset>
                <label for="password">
                    Mot de Passe :
                </label>
                <input type="password" name="password" id="password" />
            </fieldset>
             <fieldset>
                <label for="hash">
                    Mot de Passe :
                </label>
                <input type="hash" name="hash" id="hash" />
            </fieldset>
            <fieldset>
                <button type="submit">Envoyer</button>
            </fieldset>
        </form>
    </body>
</html>