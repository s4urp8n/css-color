<?php

namespace s4urp8n;

use s4urp8n\exceptions\BadColorParam;
use s4urp8n\exceptions\UndetectedColor;

class Color
{
    const DEFAULT_ENCODING           = 'UTF-8';
    const COLOR_ALICEBLUE            = '#f0f8ff';
    const COLOR_ANTIQUEWHITE         = '#faebd7';
    const COLOR_AQUA                 = '#00ffff';
    const COLOR_AQUAMARINE           = '#7fffd4';
    const COLOR_AZURE                = '#f0ffff';
    const COLOR_BEIGE                = '#f5f5dc';
    const COLOR_BISQUE               = '#ffe4c4';
    const COLOR_BLACK                = '#000000';
    const COLOR_BLANCHEDALMOND       = '#ffebcd';
    const COLOR_BLUE                 = '#0000ff';
    const COLOR_BLUEVIOLET           = '#8a2be2';
    const COLOR_BROWN                = '#a52a2a';
    const COLOR_BURLYWOOD            = '#deb887';
    const COLOR_CADETBLUE            = '#5f9ea0';
    const COLOR_CHARTREUSE           = '#7fff00';
    const COLOR_CHOCOLATE            = '#d2691e';
    const COLOR_CORAL                = '#ff7f50';
    const COLOR_CORNFLOWERBLUE       = '#6495ed';
    const COLOR_CORNSILK             = '#fff8dc';
    const COLOR_CRIMSON              = '#dc143c';
    const COLOR_CYAN                 = '#00ffff';
    const COLOR_DARKBLUE             = '#00008b';
    const COLOR_DARKCYAN             = '#008b8b';
    const COLOR_DARKGOLDENROD        = '#b8860b';
    const COLOR_DARKGRAY             = '#a9a9a9';
    const COLOR_DARKGREEN            = '#006400';
    const COLOR_DARKKHAKI            = '#bdb76b';
    const COLOR_DARKMAGENTA          = '#8b008b';
    const COLOR_DARKOLIVEGREEN       = '#556b2f';
    const COLOR_DARKORANGE           = '#ff8c00';
    const COLOR_DARKORCHID           = '#9932cc';
    const COLOR_DARKRED              = '#8b0000';
    const COLOR_DARKSALMON           = '#e9967a';
    const COLOR_DARKSEAGREEN         = '#8fbc8f';
    const COLOR_DARKSLATEBLUE        = '#483d8b';
    const COLOR_DARKSLATEGRAY        = '#2f4f4f';
    const COLOR_DARKTURQUOISE        = '#00ced1';
    const COLOR_DARKVIOLET           = '#9400d3';
    const COLOR_DEEPPINK             = '#ff1493';
    const COLOR_DEEPSKYBLUE          = '#00bfff';
    const COLOR_DIMGRAY              = '#696969';
    const COLOR_DODGERBLUE           = '#1e90ff';
    const COLOR_FIREBRICK            = '#b22222';
    const COLOR_FLORALWHITE          = '#fffaf0';
    const COLOR_FORESTGREEN          = '#228b22';
    const COLOR_FUCHSIA              = '#ff00ff';
    const COLOR_GAINSBORO            = '#dcdcdc';
    const COLOR_GHOSTWHITE           = '#f8f8ff';
    const COLOR_GOLD                 = '#ffd700';
    const COLOR_GOLDENROD            = '#daa520';
    const COLOR_GRAY                 = '#808080';
    const COLOR_GREEN                = '#008000';
    const COLOR_GREENYELLOW          = '#adff2f';
    const COLOR_HONEYDEW             = '#f0fff0';
    const COLOR_HOTPINK              = '#ff69b4';
    const COLOR_INDIANRED            = '#cd5c5c';
    const COLOR_INDIGO               = '#4b0082';
    const COLOR_IVORY                = '#fffff0';
    const COLOR_KHAKI                = '#f0e68c';
    const COLOR_LAVENDER             = '#e6e6fa';
    const COLOR_LAVENDERBLUSH        = '#fff0f5';
    const COLOR_LAWNGREEN            = '#7cfc00';
    const COLOR_LEMONCHIFFON         = '#fffacd';
    const COLOR_LIGHTBLUE            = '#add8e6';
    const COLOR_LIGHTCORAL           = '#f08080';
    const COLOR_LIGHTCYAN            = '#e0ffff';
    const COLOR_LIGHTGOLDENRODYELLOW = '#fafad2';
    const COLOR_LIGHTGRAY            = '#d3d3d3';
    const COLOR_LIGHTGREEN           = '#90ee90';
    const COLOR_LIGHTPINK            = '#ffb6c1';
    const COLOR_LIGHTSALMON          = '#ffa07a';
    const COLOR_LIGHTSEAGREEN        = '#20b2aa';
    const COLOR_LIGHTSKYBLUE         = '#87cefa';
    const COLOR_LIGHTSLATEGRAY       = '#778899';
    const COLOR_LIGHTSTEELBLUE       = '#b0c4de';
    const COLOR_LIGHTYELLOW          = '#ffffe0';
    const COLOR_LIME                 = '#00ff00';
    const COLOR_LIMEGREEN            = '#32cd32';
    const COLOR_LINEN                = '#faf0e6';
    const COLOR_MAGENTA              = '#ff00ff';
    const COLOR_MAROON               = '#800000';
    const COLOR_MEDIUMAQUAMARINE     = '#66cdaa';
    const COLOR_MEDIUMBLUE           = '#0000cd';
    const COLOR_MEDIUMORCHID         = '#ba55d3';
    const COLOR_MEDIUMPURPLE         = '#9370db';
    const COLOR_MEDIUMSEAGREEN       = '#3cb371';
    const COLOR_MEDIUMSLATEBLUE      = '#7b68ee';
    const COLOR_MEDIUMSPRINGGREEN    = '#00fa9a';
    const COLOR_MEDIUMTURQUOISE      = '#48d1cc';
    const COLOR_MEDIUMVIOLETRED      = '#c71585';
    const COLOR_MIDNIGHTBLUE         = '#191970';
    const COLOR_MINTCREAM            = '#f5fffa';
    const COLOR_MISTYROSE            = '#ffe4e1';
    const COLOR_MOCCASIN             = '#ffe4b5';
    const COLOR_NAVAJOWHITE          = '#ffdead';
    const COLOR_NAVY                 = '#000080';
    const COLOR_OLDLACE              = '#fdf5e6';
    const COLOR_OLIVE                = '#808000';
    const COLOR_OLIVEDRAB            = '#6b8e23';
    const COLOR_ORANGE               = '#ffa500';
    const COLOR_ORANGERED            = '#ff4500';
    const COLOR_ORCHID               = '#da70d6';
    const COLOR_PALEGOLDENROD        = '#eee8aa';
    const COLOR_PALEGREEN            = '#98fb98';
    const COLOR_PALETURQUOISE        = '#afeeee';
    const COLOR_PALEVIOLETRED        = '#db7093';
    const COLOR_PAPAYAWHIP           = '#ffefd5';
    const COLOR_PEACHPUFF            = '#ffdab9';
    const COLOR_PERU                 = '#cd853f';
    const COLOR_PINK                 = '#ffc0cb';
    const COLOR_PLUM                 = '#dda0dd';
    const COLOR_POWDERBLUE           = '#b0e0e6';
    const COLOR_PURPLE               = '#800080';
    const COLOR_RED                  = '#ff0000';
    const COLOR_ROSYBROWN            = '#bc8f8f';
    const COLOR_ROYALBLUE            = '#4169e1';
    const COLOR_SADDLEBROWN          = '#8b4513';
    const COLOR_SALMON               = '#fa8072';
    const COLOR_SANDYBROWN           = '#f4a460';
    const COLOR_SEAGREEN             = '#2e8b57';
    const COLOR_SEASHELL             = '#fff5ee';
    const COLOR_SIENNA               = '#a0522d';
    const COLOR_SILVER               = '#c0c0c0';
    const COLOR_SKYBLUE              = '#87ceeb';
    const COLOR_SLATEBLUE            = '#6a5acd';
    const COLOR_SLATEGRAY            = '#708090';
    const COLOR_SNOW                 = '#fffafa';
    const COLOR_SPRINGGREEN          = '#00ff7f';
    const COLOR_STEELBLUE            = '#4682b4';
    const COLOR_TAN                  = '#d2b48c';
    const COLOR_TEAL                 = '#008080';
    const COLOR_THISTLE              = '#d8bfd8';
    const COLOR_TOMATO               = '#ff6347';
    const COLOR_TURQUOISE            = '#40e0d0';
    const COLOR_VIOLET               = '#ee82ee';
    const COLOR_WHEAT                = '#f5deb3';
    const COLOR_WHITE                = '#ffffff';
    const COLOR_WHITESMOKE           = '#f5f5f5';
    const COLOR_YELLOW               = '#ffff00';
    const COLOR_YELLOWGREEN          = '#9acd32';

    protected $red;
    protected $green;
    protected $blue;
    protected $alpha;

    protected function __construct($red, $green, $blue, $alpha)
    {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
        $this->setAlpha($alpha);
    }

    public static function parse($color)
    {
        try {
            $colorToParse = mb_strtolower($color, static::DEFAULT_ENCODING);
            $colorToParse = preg_replace('#\s+#iu', '', $colorToParse);
            $colorToParse = preg_replace('#;#iu', '', $colorToParse);
            if (preg_match('#^rgba?\([^)]+\)$#', $colorToParse)) {
                return static::parseRgb($colorToParse);
            }
            $predefinedColors = static::getPredefinedColors();
            if (array_key_exists($colorToParse, $predefinedColors)) {
                return static::hex($predefinedColors[$colorToParse]);
            }
            return static::hex($colorToParse);
        }
        catch (\Exception $exception) {
            throw new UndetectedColor('Can\'t detect color from string=' . $color);
        }

    }

    private static function parseRgb($colorToParse)
    {
        $colorToParse = preg_replace('#(^\w+\()|(\)$)#', '', $colorToParse);
        $parts = explode(',', $colorToParse);
        return static::rgb(...$parts);
    }

    public static function rgb($red, $green, $blue, $alpha = 1)
    {
        return new self($red, $green, $blue, $alpha);
    }

    private static function getPredefinedColors()
    {
        $colors = [];
        $reflection = new \ReflectionClass(__CLASS__);
        $constants = $reflection->getConstants();
        foreach ($constants as $constant => $value) {
            $constant = strtolower($constant);
            if (preg_match('#^color_\w+$#', $constant)) {
                $color = preg_replace('#^color_#', '', $constant);
                $colors[$color] = $value;
            }
        }
        return $colors;
    }

    public static function hex($hexColor)
    {
        $hex = mb_strtolower($hexColor, static::DEFAULT_ENCODING);
        $hex = preg_replace('/[^0987654321abcdef]+/iu', '', $hex);
        $len = mb_strlen($hex, static::DEFAULT_ENCODING);
        $red = $green = $blue = $alpha = null;
        if ($len == 3) {
            $red = str_repeat(substr($hex, 0, 1), 2);
            $green = str_repeat(substr($hex, 1, 1), 2);
            $blue = str_repeat(substr($hex, 2, 1), 2);
            $alpha = 1;
        } elseif ($len == 4) {
            $red = str_repeat(substr($hex, 0, 1), 2);
            $green = str_repeat(substr($hex, 1, 1), 2);
            $blue = str_repeat(substr($hex, 2, 1), 2);
            $alpha = str_repeat(substr($hex, 3, 1), 2);
            $alpha = static::parseHexAlpha($alpha);
        } elseif ($len == 6) {
            $red = substr($hex, 0, 2);
            $green = substr($hex, 2, 2);
            $blue = substr($hex, 4, 2);
            $alpha = 1;
        } elseif ($len == 8) {
            $red = substr($hex, 0, 2);
            $green = substr($hex, 2, 2);
            $blue = substr($hex, 4, 2);
            $alpha = substr($hex, 6, 2);
            $alpha = static::parseHexAlpha($alpha);
        }
        if (is_null($red)) {
            throw new UndetectedColor('Can\'t detect hex color from ' . $hexColor);
        }

        return static::rgb(hexdec($red), hexdec($green), hexdec($blue), $alpha);
    }

    protected static function parseHexAlpha($hexAlpha)
    {
        $dec = hexdec($hexAlpha);
        $percentage = ($dec * 100) / 255;
        if ($percentage >= 100) {
            return 1;
        }
        if ($percentage <= 0) {
            return 0;
        }
        return number_format($percentage / 100, 1, '.', '');
    }

    public function formatRgb()
    {
        $params = [
            $this->getRed(),
            $this->getGreen(),
            $this->getBlue(),
        ];
        $type = 'rgb';
        if ($this->alpha != 1) {
            $type = 'rgba';
            $params[] = $this->getAlpha();
        }
        return $type . '(' . implode(',', $params) . ')';
    }

    public function getRed()
    {
        return $this->red;
    }

    public function setRed($red)
    {
        if (!is_numeric($red)) {
            throw new BadColorParam('red param must be numeric');
        }
        if ($red < 0 || $red > 255) {
            throw new BadColorParam('red param must be in range [0,255]');
        }
        $this->red = $red;
        return $this;
    }

    public function getGreen()
    {
        return $this->green;
    }

    public function setGreen($green)
    {
        if (!is_numeric($green)) {
            throw new BadColorParam('green param must be numeric');
        }
        if ($green < 0 || $green > 255) {
            throw new BadColorParam('green param must be in range [0,255]');
        }
        $this->green = $green;
        return $this;
    }

    public function getBlue()
    {
        return $this->blue;
    }

    public function setBlue($blue)
    {
        if (!is_numeric($blue)) {
            throw new BadColorParam('blue param must be numeric');
        }
        if ($blue < 0 || $blue > 255) {
            throw new BadColorParam('blue param must be in range [0,255]');
        }
        $this->blue = $blue;
        return $this;
    }

    public function getAlpha()
    {
        return $this->alpha;
    }

    public function setAlpha($alpha)
    {
        if (!is_numeric($alpha)) {
            throw new BadColorParam('alpha param must be numeric');
        }
        if ($alpha < 0 || $alpha > 1) {
            throw new BadColorParam('alpha param must be in range [0,1]');
        }
        $this->alpha = $alpha;
        return $this;
    }

    public function formatHex()
    {
        $params = [
            dechex($this->getRed()),
            dechex($this->getGreen()),
            dechex($this->getBlue()),
        ];
        if ($this->alpha != 1) {
            $alpha = ceil($this->getAlpha() * 255);
            $params[] = dechex($alpha);
        }
        $params = array_map(function ($param) {
            return str_pad($param, 2, '0', STR_PAD_LEFT);
        }, $params);
        return '#' . implode('', $params);
    }

}