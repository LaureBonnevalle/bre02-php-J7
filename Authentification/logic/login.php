<?php
session_start();

require("../connexion.php");

$email=$_POST["email"];
$pw= $_POST["password"];

if(isset($_POST["email"]))

{   $email= $_POST["email"];
    
    $query = $db->prepare('SELECT email FROM users WHERE email = :email');
    $parameters = [
            'email' => $_POST['email']
           
];
$query->execute($parameters);
$user = $query->fetch(PDO::FETCH_ASSOC);
       
         echo " Bonjour <br>";
    }
else
    {
        echo "email incorrect ou inexistant<br>";

}

?>