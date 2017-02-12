<?php
// Default Route show "PHP Framework READY !"
$this->router->get('/', function() {
    $this->controller['myController']->home();
});
// Example Route with service
$this->router->get('/service', function() {
    $this->controller['myController']->exampleService();
});