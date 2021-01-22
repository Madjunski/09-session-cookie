<?php

    session_start();
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
        $_SESSION['notification'] = '<p style="color: green";> Bonjour ' . $_POST['pseudo'] . ', bienvenue sur notre site!</p>';
        header('Location: index.php');
    }
    elseif (isset($_GET['connect'])) {
        // $email = $_POST['email'];
        $req = $bdd->prepare('SELECT password, pseudo FROM user WHERE email=:email');
        $req->bindValue(':email', $_POST['email']);
        $req->execute();
        $data = $req->fetch();
        // var_dump($data['password']);
        if(isset($data['password'])){
            if (password_verify($_POST['password'], $data['password'])) {
                $_SESSION['notification'] = '<p style="color: green;">Bonjour ' . $data['pseudo'] . '</p>';
                $_SESSION['connecter'] = TRUE;
                header('Location: profile.php');
            } 
            else {
                $_SESSION['notification'] = '<p style="color: red;">Email ou mdp incorrect</p>';
                header('Location: index.php');
            }
        }
        else{
            $_SESSION['notification'] = '<p style="color: blue;">Vous n\'êtes pas encore inscrit.</p>';
            header('Location: index.php');
        }       

    }
    elseif (isset($_GET['disconnect'])) {
        session_unset();
        session_destroy();
        session_start();
        $_SESSION['notification'] = '<p style="color: green;">Vous avez bien été déconnecté.</p>';
        header('Location: index.php');
    }

?>