<?php

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

require_once("Models/userModel.php");
$uri = $_SERVER["REQUEST_URI"];
var_dump($uri);

if($uri === "/connexion") {

    if (isset($_POST['btnEnvoi'])) {

        $erreur = false;

        if (connectUser($pdo)) {

            header("location:/");
        }

        else {
            $erreur = true;
        }
    }
    
    $title = "connexion";
    $template = "views/users/connexion.php"; //chemin vers la vue demandée
    require_once("views/base.php"); // appel de la page qui sera remplie avec la vue demandée

}

if($uri === "/profil") {

    if (isset($_POST['btnEnvoi'])) {

        $erreur = false;

        if (connectUser($pdo)) {

            header("location:/");
            
        }

        else {
            $erreur = true;
        }
    }
    
        $title = "Votre profil";
        $template = "Views/Users/profil.php";
        require_once("Views/base.php");

}

elseif ($uri === "/deconnexion") {

    session_destroy();

    header("location:/");
}

elseif ($uri === "/inscription") {

    if (isset($_POST['btnEnvoi'])) 
    {

        var_dump($_POST);
        $messageError = verifEmptyData();

        if (!$messageError) {
            
            createUser($pdo);

                header('location:/connexion');
        }
    }
    
    $title = "Inscription";
    $template = "views/users/inscriptionOrEditProfile.php";
    require_once("views/base.php"); // appel de la page qui sera remplie avec la vue demandée
}
 
else if ($uri === "/updateProfil") {
    if (isset($_POST['btenEnvoi'])) {

        $messageError = verifEmptyData();

        if (!$messageError) {

            updateUser($pdo);

            updateSession($pdo);

            header('location:/profil');

        }
    }
    
    $title = "Mise à jour du profil";
    $template = "Views/Users/inscriptionOrEditProfile.php";
    require_once("Views/base.php");
}

else if ($uri === "/deleteProfil") {
    
    deleteUser($pdo);
    header("location:/deconnexion");
}





