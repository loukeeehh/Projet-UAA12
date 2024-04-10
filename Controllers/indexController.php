<?php // code php php qui décide de ce qu'il faut donner comme valeur à la variable $template
   
    // on ajoutera par la suite les require aux modèle 

    require_once("Models/complexesModel.php");
    // récupération du chemin désiré
    $uri = $_SERVER["REQUEST_URI"];

    if ($uri === "/index.php" || $uri === "/") {

        $complexes = selectAllComplexes($pdo);
       
        $title = "Page d'accueil";
        $template = "views/pageAccueil.php";
        require_once("views/base.php");
    }