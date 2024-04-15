<?php

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

elseif ($uri === "/deconnexion") {

    session_destroy();

    header("location:/");
}

elseif ($uri === "/inscription") {
    if (isset($_POST['btnEnvoi'])) {

        $messageError = verifEmptyData();

        if (!$messageError) {
            createUser($pdo);

                header('location:/connnexion');
        }
    }
    
    $title = "Inscription";
    $template = "views/users/inscriptionOrEditProfile.php";
    require_once("views/base.php"); // appel de la page qui sera remplie avec la vue demandée
}

elseif ($uri === "/rendezVous") {
    
    $title = "Prendre rendez-vous";
    $template = "Views/Users/rendezVous.php";
    require_once("Views/base.php");
}

else if ($uri === "/updateProfil") {
    
    $title = "Mise à jour du profil";
    $template = "Views/Users/inscriptionOrEditProfile.php";
    require_once("Views/base.php");
}



