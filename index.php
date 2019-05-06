<?php include "style.php" ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    <?php
    Print("Nous sommes le $date et il est $display_hour");
    ?>
    <p>
    Météo de <strong><a href="paris.php">Paris</a></strong>
    </p>
    <p>
    Météo de <strong><a href="bordeaux.php">Bordeaux</a></strong>
    </p>

<hr>

    <form method="POST">
        <h2>Bonus : Contact</h2>
        <input type="text" name="nom" placeholder="Nom" /><br>
        <input type="text" name="prenom" placeholder="Prénom" /><br>
        <input type="email" name="email" placeholder="E-mail" /><br>
        <textarea name="message" placeholder="Message"></textarea><br>
        <input type="submit" name="contact" value="Envoyer" /><br>
    </form>
    <?php include "contact.php" ?>
</body>
</html>