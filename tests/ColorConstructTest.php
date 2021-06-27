<?php

class ColorConstructTest extends PHPUnit\Framework\TestCase
{

    public function testRgb()
    {
        $color = \s4urp8n\Color::rgb(1, 2, 3);
        $this->assertEquals('rgb(1,2,3)', $color->formatRgb());
        $this->assertEquals(1, $color->getRed());
        $this->assertEquals(2, $color->getGreen());
        $this->assertEquals(3, $color->getBlue());
        $this->assertEquals(1, $color->getAlpha());
    }

    public function testRgba()
    {
        $color = \s4urp8n\Color::rgb(1, 2, 3, 0.5);
        $this->assertEquals('rgba(1,2,3,0.5)', $color->formatRgb());
        $this->assertEquals(1, $color->getRed());
        $this->assertEquals(2, $color->getGreen());
        $this->assertEquals(3, $color->getBlue());
        $this->assertEquals(0.5, $color->getAlpha());
    }

    public function testHex3()
    {
        $color = \s4urp8n\Color::hex('f34');
        $this->assertEquals('rgb(255,51,68)', $color->formatRgb());
        $this->assertEquals(255, $color->getRed());
        $this->assertEquals(51, $color->getGreen());
        $this->assertEquals(68, $color->getBlue());
        $this->assertEquals(1, $color->getAlpha());
    }

    public function testHex4()
    {
        $color = \s4urp8n\Color::hex('f344');
        $this->assertEquals('rgba(255,51,68,0.3)', $color->formatRgb());
        $this->assertEquals(255, $color->getRed());
        $this->assertEquals(51, $color->getGreen());
        $this->assertEquals(68, $color->getBlue());
        $this->assertEquals(0.3, $color->getAlpha());
    }

    public function testHex6()
    {
        $color = \s4urp8n\Color::hex('ff3344');
        $this->assertEquals('rgb(255,51,68)', $color->formatRgb());
        $this->assertEquals(255, $color->getRed());
        $this->assertEquals(51, $color->getGreen());
        $this->assertEquals(68, $color->getBlue());
        $this->assertEquals(1, $color->getAlpha());
    }

    public function testHex8()
    {
        $color = \s4urp8n\Color::hex('ff334400');
        $this->assertEquals('rgba(255,51,68,0)', $color->formatRgb());
        $this->assertEquals(255, $color->getRed());
        $this->assertEquals(51, $color->getGreen());
        $this->assertEquals(68, $color->getBlue());
        $this->assertEquals(0, $color->getAlpha());

        $color = \s4urp8n\Color::hex('#ff3344ff');
        $this->assertEquals('rgb(255,51,68)', $color->formatRgb());
        $this->assertEquals(255, $color->getRed());
        $this->assertEquals(51, $color->getGreen());
        $this->assertEquals(68, $color->getBlue());
        $this->assertEquals(1, $color->getAlpha());

        $color = \s4urp8n\Color::hex('#ff33447f');
        $this->assertEquals('rgba(255,51,68,0.5)', $color->formatRgb());
        $this->assertEquals(255, $color->getRed());
        $this->assertEquals(51, $color->getGreen());
        $this->assertEquals(68, $color->getBlue());
        $this->assertEquals(0.5, $color->getAlpha());

        $color = \s4urp8n\Color::hex('#FFFFFF80');
        $this->assertEquals('rgba(255,255,255,0.5)', $color->formatRgb());
        $this->assertEquals(255, $color->getRed());
        $this->assertEquals(255, $color->getGreen());
        $this->assertEquals(255, $color->getBlue());
        $this->assertEquals(0.5, $color->getAlpha());
    }

}