<?php

namespace src\myName\CoreBundle\Controller;


use kayzore\bundle\ControllerBundle\Controller\Controller;
use kayzore\bundle\ServicesBundle\Controller\Services;

class myController extends Controller
{
    private $nameBundle = 'CoreBundle';

    public function __construct() {
        parent::__construct($this->nameBundle);
    }

    public function home() {
        echo $this->twig->render('hello.html.twig', array('message' => 'PHP Framework READY !'));
    }

    public function exampleService() {
        $services = new Services();
        $dbService = $services->getService('dbService');
        echo $this->twig->render('hello.html.twig', array('message' => 'Page with service !'));
    }

}