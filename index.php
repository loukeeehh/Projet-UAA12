<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start([
            'cookie_httponly' => true, // Empêche JavaScript d'accéder au cookie de session
            'cookie_secure' => true, // Ne transmet le cookie de session que via HTTPS
            'use_strict_mode' => true // Active le mode strict pour la gestion de session
        ]);
    }

    require_once("Config/connectDataBase.php");
    require_once("Controllers/indexController.php");
    require_once("Controllers/userController.php");
    require_once("Controllers/complexesController.php");
