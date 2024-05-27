<?php


require ("../connexion.php");

$firstName= $_POST["firstName"];
$lastName= $_POST["lastName"];
$email=$_POST["email"];
$pw= $_POST["password"];

if(isset($_POST["firstName"]) && isset($_POST["lastName"]) && isset($_POST["email"]) &&isset($_POST["password"]))
{
    $pw = $_POST["password"];
    echo "$pw";
    $hash = password_hash($pw, PASSWORD_DEFAULT );
    echo "<p>$hash<br></p>";
   
    $query = $db->prepare('INSERT INTO users (id, first_name, last_name, email, password) VALUES (NULL,  :first_name, :last_name,:email, :password)');
$parameters = [
    'first_name' => $firstName,
    'last_name' => $lastName,
    'email'=> $email,
    'password'=> $hash,
];

$query->execute($parameters);

$userId = $db->lastInsertId();

var_dump ($firstName,$lastName,$email, $hash);

}
else {
    echo "error";
}



?>