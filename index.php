<?php
    include_once('session.php');
    /**récupérer l'adresse IP */
    // $ip = $_SERVER['REMOTE_ADDR'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>

<body>
    <h1>Connexion</h1>

    <form action="traitement.php?connect" method="post">

        <label for="email">Email</label><br>
        <input type="email" name="email"><br>

        <label for="password">Mot de passe</label><br>
        <input type="password" name="password"><br>

        <input type="submit" value="connexion">

    </form>

    <p>Pas encore inscrit? <a href="register.php">Créer un compte</p>

</body>

</html>