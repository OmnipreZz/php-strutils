<?php

require "./StrUtils.php";

// pour tester !!  taper composer test dans la console !!
class Test extends \PHPUnit\Framework\TestCase {

    public function setUp() {
        $this->classTest = new StrUtils('hello');
    }

    public function tearDown() {
        unset($this->classTest);
    }

    public function testAttribute() {
        $this->assertClassHasAttribute('str', Strutils::class);
    }

    public function testBold() {
        $this->assertEquals('<strong>hello</strong>', $this->classTest->bold());
    }

    public function testItalic() {
        $this->assertEquals('<i>hello</i>', $this->classTest->italic());
    }

    public function testUnderline() {
        $this->assertEquals('<u>hello</u>', $this->classTest->underline());
    }
}


?>