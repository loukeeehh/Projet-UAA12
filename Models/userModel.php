<?php

function createUser($pdo)
{
    try {
        $query = 'INSERT INTO user(nomUser, prenomUser, loginUser, genreUser, bornUser, mailUser, passWordUser)
        VALUES (:nomUser, :prenomUser, :loginUser, :genreUser, :bornUser, :mailUser, :passWordUser)';

        $ajouteUser = $pdo->prepare($query);

        $ajouteUser->execute([
            'nomUser' => $_POST["nom"],
            'prenomUser' => $_POST["prenom"],
            'loginUser' => $_POST["login"],
            'genreUser' => $_POST["genre"],
            'bornUser' => $_POST["date_de_naissance"],
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


function updateUser($pdo) 
{

    try {
        $query = 'update user set nomUser = :nomUser, prenomUser = :prenomUser, genreUser = :genreUser, bornUser = :bornUser, passwordUser = :passwordUser, mailUser = :mailUser where userID = :userID';

        $ajouteUser = $pdo-> prepare($query);

        $ajouteUser-> execute([
            'nomUser' => $_POST["nom"],
            'prenomUser' => $_POST["prenom"],
            'genreUser' => $_POST["genre"],
            'bornUser' => $_POST["date_de_naissance"],
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

function deleteUser ($pdo)
{
    try {
        $query = 'delete from user where userID = :userID';
        $delUser = $pdo->prepare($query);
        $delUser->execute([
            'userID' => $_SESSION["user"]-> userID
        ]);

    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}