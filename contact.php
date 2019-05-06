<?php

if (isset($_POST['contact'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);


    echo "<p>
    Votre Prénom : ".$prenom."<br>
    Votre Nom : ".$nom."<br>
    Votre E-mail : ".$email."<br>
    Votre Message : ".$message."<br>
        </p>";
}

?>