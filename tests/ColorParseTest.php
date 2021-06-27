<?php

class ColorParseTest extends PHPUnit\Framework\TestCase
{
    /**
     * @param $input
     * @param $hex
     * @dataProvider parseDataProvider
     */
    public function testParse($input, $hex)
    {
        $color = \s4urp8n\Color::parse($input);
        $this->assertEquals($hex, $color->formatHex());
    }

    public function parseDataProvider()
    {
        return [
            ['ffffff80', '#ffffff80'],
            ['CORNFLOWERBLUE', '#6495ed'],
            ['rgba(255,255,255,0.5)', '#ffffff80'],
            ['rgba(255,255,255,0.5);', '#ffffff80'],
            ['rgba(255,255,255,0.51);', '#ffffff83'],
            ['rgba(255,255,255,0.55);', '#ffffff8d'],
            ['rgba(255,255,255,1)', '#ffffff'],
            ['rgba(255,255,255,0)', '#ffffff00'],
            ['rgba(255,255,255,1)', '#ffffff'],
            ['rgb(   255,255,255)', '#ffffff'],
            ['rgb(  0, 191, 255)', '#00bfff'],
            ['ffffff', '#ffffff'],
            ['   #ffffff    ', '#ffffff'],
            ['CORNSILK', '#fff8dc'],
            ['CRIMSON', '#dc143c'],
            ['  CYAN', '#00ffff'],
            ['DARKBLUE', '#00008b'],
            ['DARKCYAN', '#008b8b'],
            ['DARKGOLDENROD', '#b8860b'],
            ['DARkGRAY ', '#a9a9a9'],
            ['DARKGREEN', '#006400'],
            ['DARKKHAKI', '#bdb76b'],
            ['   DARKMAGENTA', '#8b008b'],
            ['  darkolivegreen  ', '#556b2f'],
            ['DARKORANGE', '#ff8c00'],
            ['rgb(0,0,0)', '#000000'],
            ['rgb(255,255,255)', '#ffffff'],
            ['rgb(255,0,0)', '#ff0000'],
            ['rgb(0,255,0)', '#00ff00'],
            ['rgb(0,0,255)', '#0000ff'],
            ['rgb(255,255,0)', '#ffff00'],
            ['rgb(0,255,255);', '#00ffff'],
            ['rgb(255,0,255)', '#ff00ff'],
            ['rgb(192,192,192)', '#c0c0c0'],
            ['rgb(128,128,128)', '#808080'],
            ['rgb(128,0,0)', '#800000'],
            ['rgb(128,128,0)', '#808000'],
            ['rgb(0,128,0)', '#008000'],
            ['rgb(128,0,128)', '#800080'],
            ['rgb(0,128,128)', '#008080'],
            ['rgb(0,0,128)', '#000080'],
            ['Black', '#000000'],
            ['White', '#ffffff'],
            ['Red', '#ff0000'],
            ['Lime', '#00ff00'],
            ['Blue', '#0000ff'],
            ['Yellow', '#ffff00'],
            ['Cyan', '#00ffff'],
            ['Magenta', '#ff00ff'],
            ['Silver', '#c0c0c0'],
            ['Gray', '#808080'],
            ['Maroon', '#800000'],
            ['Olive', '#808000'],
            ['Green', '#008000'],
            ['Purple', '#800080'],
            ['Teal', '#008080'],
            ['Navy', '#000080'],
        ];
    }

}