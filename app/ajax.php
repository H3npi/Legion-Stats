<?php
use App\Controller as AppController;

// Vendor autoload
require '../vendor/autoload.php';

// project autoload
require_once('Autoloader.php');
\App\Autoloader::register();

$bapiController = new AppController\BapiController();
$bapiController->getCharacterInformations();


