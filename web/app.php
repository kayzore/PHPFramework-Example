<?php

use app\config\Parameters;
use kayzore\bundle\RouterBundle\controller\RouterController;

require_once '../vendor/autoload.php';
require_once '../app/Autoloader.php';

Autoloader::register();

new Parameters();
new RouterController();
