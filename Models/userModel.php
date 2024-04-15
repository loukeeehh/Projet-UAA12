<?php

function createUser($pdo)
{
    try {
        $query = 'insert into user(nomUser, prenomUser, loginUser, genreUser, bornUser, mailUser, passWordUser)
        values (:nomUser, :prenomUser, :loginUser, :genreUser, bornUser, :mailUser, :passWordUser)';

        $ajouteUser = $pdo->prepare($query);

        $ajouteUser->execute([
            'nomUser' => $_POST["nom"],
            'prenomUser' => $_POST["prénom"],
            'loginUser' => $_POST["login"],
            'genreUser' => $_POST["Genre"],
            'bornUser' => $_POST["Date_de_naissance"],
            'mailUser' => $_POST["email"],
            'passWordUser' => $_POST["mot_de_passe"]
        ]);
    } catch (PDOEXCEPTION $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function connectUser($pdo)
{
    try {
        $query = 'select * from user where loginUser = :loginUser and passwordUser = :passWordUser';

        $connectUser = $pdo->prepare($query);

        $connectUser-> execute([
            'loginUser' => $_POST["login"],
            'passWordUser' => $_POST["mot_de_passe"]
        ]);

        $user = $connectUser-> fetch();
        if(!$user) {
            return false;
        }
        else {
            $_SESSION["user"] = $user;
            return true;
        }
    } catch(PDOException $e) {
        $message = $e->getMessage();
        die ($message);
    }
}

function verifEmptyData()
{
    // parcours du tableau $_POST en recherchant les éléments vides ou munis d'espaces
    foreach ($_POST as $key => $value) {

        //str-replace remplace une chaine par une autre dans une chaine de caractères donnée, ici un espace par le vide dans $value.
        if (empty(str_replace(' ', '', $value))) {

            //on remplit un tableau associatif $messageError dont les clés sont les noms des champs avec un message rappelant que le champs concerné est vide.
            $messageError[$key] = "Votre" . $key . " est vide.";
        }
    }

    // si le tableau $messageError est vide, on renverra false, sinon, on renvoie le tableau
    if (isset($messageError)) {
        return $messageError;
    } else {
        return false;
    }
}

function updateUser($pdo) 
{

    try {
        $query = 'update user set nomUser = :nomUser, prenomUser = :prenomUser, passwordUser = :passwordUser, mailUser = :mailUser where id = :id';

        $ajouteUser = $pdo-> prepare($query);

        $ajouteUser-> execute([
            'nomUser' => $_POST["nom"],
            'prenomUser' => $_POST["prenom"],
            'passwordUser' => $_POST["mot_de_passe"],
            'mailUser' => $_POST["email"],
            'id' => $_SESSION["user"]-> id
        ]);

    } catch (PDOException $e) {
        $message = $e->getMessage();
        die ($message);
    }
}

function updateSession($pdo)
{
    try {
        $query = 'select * from user where id = :id';
        $selectUser = $pdo-> prepare($query);
        $selectUser-> execute([
            'id' => $_SESSION["user"]-> id
        ]);

        $user = $selectUser-> fetch();
        $_SESSION["user"] = $user;

    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
} 