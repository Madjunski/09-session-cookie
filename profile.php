<?php
    
    include_once('session.php');
    if(isset($_SESSION['connecter']) && $_SESSION['connecter'] === TRUE){    

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mon profil</title>
    </head>
    
    <body>
    
        <h1>Mon profile</h1>
    
        <ul>
            <li>Pseudo: </li>
            <li>Email: </li>
            <li>Adresse: </li>
            <li>Code postal: </li>
            <li>Ville: </li>
            <li>Iscrit depuis: </li>
        </ul>

        <a href="traitement.php?disconnect">Déconnexion</a>

    </body>
    
    </html>

<?php
    }
    else{
        echo('vous n\'avez pas accès');
    }
?>