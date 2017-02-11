<?php

use kayzore\bundle\ConfigurationBundle\KayParameters;
use kayzore\bundle\RouterBundle\controller\RouterController;

require_once '../vendor/autoload.php';
require_once '../app/Autoloader.php';

Autoloader::register();

define('RACINE_WEB', dirname(dirname(__FILE__)) .'\\');
new KayParameters();
new RouterController();
