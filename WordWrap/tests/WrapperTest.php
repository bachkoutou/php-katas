<?php
class WrapperTest extends PHPUnit_Framework_TestCase {
    public function testWrap()
    {
        $this->assertWraps(null, 1, "");
        $this->assertWraps("", 1, "");
        $this->assertWraps("x", 1, "x");
        $this->assertWraps("xx", 1, "x\nx");
        $this->assertWraps("xxx", 1, "x\nx\nx");
        $this->assertWraps("x x", 1, "x\nx");
        $this->assertWraps("x xx", 3, "x\nxx");
        $this->assertWraps(
            "four score and seven years ago our fathers brought forth upon this continent",
            7,
            "four\nscore\nand\nseven\nyears\nago our\nfathers\nbrought\nforth\nupon\nthis\ncontine\nnt"
        );

    }

    public function assertWraps($s, $width, $expected)
    {
        $this->assertSame($expected, $this->wrap($s, $width));
    }

    private function wrap($s, $width)
    {
        if ($s === null) {
            return "";
        }
        if (strlen($s) <= $width) {
            return $s;
        } else {
            $index = $width + 1;
            $subString = substr($s, 0, $index);
            $breakPoint = strrpos($subString, " ");
            if ($breakPoint === false) {
                $breakPoint = $width;
            }
            return substr($s, 0, $breakPoint) . "\n" . $this->wrap(trim(substr($s, $breakPoint)), $width);
        }
    }
}
