<?php
$uri = $_SERVER["REQUEST_URI"];
require_once("Models/complexesModel.php");
if ($uri === "/complexes") {
    $complexes = selectAllComplexes($pdo);
    $title = "Nos complexes";
    $template = "Views/Users/complexes.php";
    require_once("Views/base.php");
}
