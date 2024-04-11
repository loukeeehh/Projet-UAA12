<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    require_once("Config/connectDataBase.php");
    require_once("Controllers/indexController.php");
    require_once("Controllers/userController.php");
    require_once("Controllers/complexesController.php");