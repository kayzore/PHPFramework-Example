<?php
// Default Route show "PHP Framework READY !"
$this->router->get('/', function() {
    $this->controller['myController']->home();
});