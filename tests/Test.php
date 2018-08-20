<?php

require "./StrUtils.php";

// pour tester !!  taper composer test dans la console !!
class Test extends \PHPUnit\Framework\TestCase {

    public function testBold() {
        $TestStr = new StrUtils('hello');
        $TestStr->bold();
        $this->assertEquals('<strong>hello</strong>', $TestStr->bold());
    }

    public function testItalic() {
        $TestStr = new StrUtils('hello');
        $this->assertEquals('<i>hello</i>', $TestStr->italic());
    }

    public function testUnderline() {
        $TestStr = new StrUtils('hello');
        $TestStr->underline();
        $this->assertEquals('<u>hello</u>', $TestStr->underline());
    }
}


?>