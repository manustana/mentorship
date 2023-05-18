<?php
// Front controller
require_once 'controller.php';

// Instantiate the controller and handle the request
$controller = new ContactController();
$controller->handleRequest();
?>