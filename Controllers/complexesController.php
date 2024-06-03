<?php
$uri = $_SERVER["REQUEST_URI"];
require_once("Models/complexesModel.php");
if ($uri === "/complexes") {
    
    $complexes = selectAllComplexes($pdo);
    $title = "Nos complexes";
    $template = "Views/Users/complexes.php";
    require_once("Views/base.php");
}

else if (isset($_GET["complexesID"]) && $uri === "/voirUnComplexe?complexesID=" . $_GET["complexesID"]) {
    
    $complexe = selectOneComplexe($pdo);
    $sports = selectSportsActiveComplexes($pdo);

    if (isset($_POST['btnEnvoi'])) {

        $erreur = false;

        if (ajouteRendezVous($pdo)) {

            header("location:/");
        }

        else {
            $erreur = true;
        }
    }


    $title = "Voir un complexe";
    $template = "Views/Users/voirUnComplexe.php";
    require_once("Views/base.php");
}
