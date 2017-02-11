<?php

namespace src\myName\CoreBundle\Controller;


use kayzore\bundle\ControllerBundle\Controller\Controller;

class myController extends Controller
{
    private $nameBundle = 'CoreBundle';

    public function __construct() {
        parent::__construct($this->nameBundle);
    }

    public function home() {
        echo $this->twig->render('hello.html.twig', array('message' => 'PHP Framework READY !'));
    }

}