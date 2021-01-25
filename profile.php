<?php
    include_once('session.php');
    require_once("bdd.php");
    // if(isset($_SESSION['connected']) && $_SESSION['connected'] != NULL){
    
/*    if(isset($_COOKIE['user_id']) && $_COOKIE['user_id'] != NULL){  //idem session, mais avec COOKIE
        // $id = (INT)$_SESSION['connected']; 
        $id = (int)$_COOKIE['user_id'];//session ou cookie
        */
    if(isset($_SESSION['connected']) || isset($_COOKIE['user_id'])){
        if(isset($_SESSION['connected']) && $_SERVER['connected'] != NULL){
            $id = (INT)$_SESSION['connected'];
        }
        elseif(isset($_COOKIE['user_id']) && $_COOKIE['user_id'] != NULL){
            $id = (int)$_COOKIE['user_id'];
        }
            $req = $bdd->query('SELECT * FROM user WHERE id=' . $id);
            $user = $req->fetch();
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
            <li>Pseudo: <?=$user['pseudo']?> </li>
            <li>Email: <?=$user['email']?> </li>
            <li>Adresse: <?=$user['address']?> </li>
            <li>Code postal :<?=$user['zip']?> </li>
            <li>Ville: <?=$user['city']?> </li>
            <li>Iscrit depuis: <?=$user['date_inscription']?> </li>
        </ul>

        <a href="traitement.php?disconnect">Déconnexion</a>

    </body>
    
    </html>

<?php
    }
    else{
        echo('vous n\'avez pas accès');
        // var_dump($_SESSION);
    }
?>