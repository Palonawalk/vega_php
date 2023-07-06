<?php

    // Récupérons la durée de vie souhaitée de la session
    $sessionLifeTime = $_ENV['SESSION_LIFE_TIME'] * 60;

    // Modification de la configuration de base des sessions
    ini_set("session.gc_maxlifetime", $sessionLifeTime);

    // Pour la session en cours,
    session_set_cookie_params([
        "lifetime"  => $sessionLifeTime,
        "path"      => "/",
        "domain"    => null,
        "secure"    => true,
        "httponly"  => true
    ]);

    // Si la session n'est pas encore démarrée, 
    if ( session_status() === PHP_SESSION_NONE ) 
    {
        // Demarre la session
        session_start();
    }