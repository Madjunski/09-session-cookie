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
        <input type="text" name="pseudo" placeholder="votre pseudo"><br>

        <label for="email">Email</label><br>
        <input type="email" name="email" placeholder="ex: email@email.com"><br>

        <label for="password">Mot de passe</label><br>
        <input type="password" name="password" placeholder="********"><br>

        <label for="address">Adresse</label><br>
        <input type="text" name="address" placeholder="ex: 1 rue du commerce"><br>

        <label for="zip">Code postal</label><br>
        <input type="number" min="1000" max="99999" name="zip" placeholder="ex: 22000"><br>

        <label for="city">Ville</label><br>
        <input type="text" name="city" placeholder="ex: Lille"><br>

        <input type="submit" value="inscription">
    </form>

</body>

</html>