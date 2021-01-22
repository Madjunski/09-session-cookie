<?php
include_once('session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>

    <h1>Inscription</h1>

    <form action="traitement.php?register" method="post">

        <label for="pseudo">Pseudo</label><br>
        <input type="text" name="pseudo" placeholder="votre pseudo" required><br>

        <label for="email">Email</label><br>
        <input type="email" name="email" placeholder="ex: email@email.com" required><br>

        <label for="password">Mot de passe</label><br>
        <input type="password" name="password" placeholder="********" required><br>

        <label for="address">Adresse</label><br>
        <input type="text" name="address" placeholder="ex: 1 rue du commerce"><br>

        <label for="zip">Code postal</label><br>
        <input type="number" min="1000" max="99999" name="zip" placeholder="ex: 22000" required><br>

        <label for="city">Ville</label><br>
        <input type="text" name="city" placeholder="ex: Lille" required><br>

        <input type="submit" value="inscription">
    </form>

    <p><a href="index.php">Retourner à l'accueil</a></p>


</body>

</html>