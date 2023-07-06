<?php

/**
 * ----------------------------------------------------------------------------
 *                  L'amorceur de l'application
 * 
 *  Ses rôles :
 *      - Charger les raccourcis (constantes)
 *      - Charger les variables d'environnement
 *      - Charger la configuration système
 *      - Charger la configuration session
 *      - Charger le monolog 
 * ----------------------------------------------------------------------------
 */


// Chargement des constantes

require __DIR__ . "/constants.php";


// Chargement des variables d'environnement

$envFile = parse_ini_file(__DIR__ . "/env.conf");

var_dump($envFile);