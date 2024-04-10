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

    // voir plus tard
}

elseif ($uri === "/inscription") {
    if (isset($_POST['btnEnvoi'])) {

        createUser($pdo);

        header('location:/connnexion');
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



