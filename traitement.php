<?php

    require_once('bdd.php');

    if(isset($_GET['register'])){
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $dateInscription = date('Y-m-d H:i:s');
        $req = $bdd->prepare('INSERT INTO user (pseudo, email, password, address, zip, city, date_inscription) VALUES (:pseudo, :email, :password, :address, :zip, :city, :date_inscription)');
        $req->bindValue(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
        $req->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
        $req->bindValue(':password', $password);
        $req->bindValue(':address', $_POST['address'], PDO::PARAM_STR);
        $req->bindValue(':zip', $_POST['zip'], PDO::PARAM_STR);
        $req->bindValue(':city', $_POST['city'], PDO::PARAM_STR);
        $req->bindValue(':date_inscription', $dateInscription);
        $req->execute();
    }

?>