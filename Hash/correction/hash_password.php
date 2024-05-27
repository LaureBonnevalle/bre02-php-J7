<?php

if(isset($_POST["password"]))
{
    $password = $_POST["password"];

    echo $password."<br>";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    echo $hash."<br>";
}

// toto $2y$10$e5dIhebwFGLRMiWIWKMzbuCz3bw.hu6ZG6azZh6yNBggMUOQqS78O

