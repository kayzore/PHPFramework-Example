<?php

use kayzore\bundle\ConfigurationBundle\KayParameters;
use kayzore\bundle\RouterBundle\controller\RouterController;

require_once '../vendor/autoload.php';
require_once '../app/Autoloader.php';

Autoloader::register();

define('RACINE_WEB', dirname(dirname(__FILE__)) .'\\');
if (is_dir('../src/kayzore/bundle/ServicesBundle/Ressources/Views/')) {
    define('DIR_BUNDLE', 'src/');
} else {
    define('DIR_BUNDLE', 'vendor/kayzore/phpframework/src/');
}
new KayParameters();
new RouterController();
