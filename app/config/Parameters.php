<?php

namespace app\config;


use kayzore\bundle\ConfigurationBundle\KayParameters;

class Parameters extends KayParameters
{
    public function __construct()
    {
        // DATABASE INFORMATIONS
        define('DB_HOST', 'localhost');
        define('DB_NAME', '');
        define('DB_USER', '');
        define('DB_PASS', '');
        // PROJECT INFORMATIONS
        define('RACINE_WEB', '/PHPFramework/');
        parent::__construct();
    }
}