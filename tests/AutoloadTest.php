<?php

require_once('app/Autoloader.php');

use PHPUnit\Framework\TestCase;

class AutoloadTest extends TestCase {

    public function testExistingFile() {
    
        $actual = \App\Autoloader::setPath("\App\Controller");
        $expect = '/app/controller.php';
        $this->assertSame($expect, $actual);

    }

}
