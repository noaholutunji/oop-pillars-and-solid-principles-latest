<?php



$registration = new Stutord\RegisterUser;
$authController = new Stutord\AuthController($registration);

$authController->register();