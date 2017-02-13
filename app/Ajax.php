<?php

use App\Controller as AppController;

// Vendor autoload
require '../vendor/autoload.php';

// project autoload
require_once('Autoloader.php');
\App\Autoloader::register();

if ((string) filter_input(INPUT_POST, 'act') === 'gci') {
    $bapiController = new AppController\BapiController($_POST);
    echo $bapiController->getCharacterInformations();
}
