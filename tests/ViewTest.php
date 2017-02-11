<?php

require_once('app/View.php');

use PHPUnit\Framework\TestCase;

class ViewTest extends TestCase {

    private $obj;

    protected function setUp() {
        $this->obj = new \App\View;
    }

    public function testRender() {
        $result = $this->obj->render();
        $this->assertTrue((is_string($result)) == 1, gettype($result) . " instead of a string!");
    }

}
