<?php

if(isset($_POST["password"]))
{
    $pw = $_POST["password"];
    echo "$pw";
    $hash = password_hash($pw, PASSWORD_DEFAULT );
    echo "<p>$hash<br></p>";
}
else {
    echo "error";
}

?>