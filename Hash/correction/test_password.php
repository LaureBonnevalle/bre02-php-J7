<?php
?>

<form action="decrypt_password.php" method="post">
    <fieldset>
        <label for="password">
            Mot de passe en clair
        </label>
        <input type="password" id="password" name="password" />
    </fieldset>
    <fieldset>
        <label for="password">
            Mot de passe chiffré
        </label>
        <input type="password" id="hash" name="hash" />
    </fieldset>
    <button type="submit">Envoyer</button>
</form>

