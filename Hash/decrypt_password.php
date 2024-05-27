<?php

if(isset($_POST["password"]) && ($_POST["hash"]))
{
    $pw = $_POST["password"];
    $hash = $_POST["hash"];
    $isPasswordCorrect = password_verify ($pw, $hash);
    if($isPasswordCorrect === true)
{
	// le mot de passe est le bon
	echo "<p>mot de passe correct</br></p>";
}
else
{
	// erreur de mot de passe
	echo "<p>mot de passe incorrect</br></p>";
}
    
}
else {
    echo "il manque un mot de passe";
}

?>