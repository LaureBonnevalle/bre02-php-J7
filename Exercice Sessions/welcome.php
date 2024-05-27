
<?php

session_start();


if(isset($_POST["nickName"]) )
{
    echo "<h1>Bonjour {$_SESSION["nickName"]}<br></h1>";
    
    // Je vérifie si ils ne sont pas vides
    
}
else
{
        echo "<h1>Bienvenue invité-e</h1>";
}

?>