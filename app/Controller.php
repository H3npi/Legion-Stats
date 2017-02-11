<?php

namespace App;

/**
 * Description of Controller
 *
 * @author Daniel Henze
 */
class Controller {

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
