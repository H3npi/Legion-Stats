<?php

namespace App;

/**
 * Description of Controller
 *
 * @author Daniel Henze
 */
class Controller {

    protected static $configFile = "../config/config.php";

    public function debug($expression, $showAll = false) {
        echo "<pre>";
        if ($showAll) {
            var_dump($expression);
        } else {
            print_r($expression);
        }
        echo "</pre>";
    }

}
