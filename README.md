# css-color
CSS color parser and convertor

### Constructors
```
$color = Color::hex('#ff00f0');
$color = Color::rgb(250, 00, 20);
$color = Color::rgb(250, 00, 20, 0.3);
```

### Parsing colors from strings
```
$colorsToParse = [
    'ffffff80',
    'CORNFLOWERBLUE',
    'rgba(255,255,255,0.5)',
    'rgba(255,255,255,0.55);',
    'rgba(255,255,255,1)',
    'rgba(255,255,255,0)',
    'rgba(255,255,255,1)',
    'rgb(   255,255,255)',
    'rgb(  0, 191, 255)',
    'ffffff',
    '   #ffffff    ',
    'CORNSILK',
    'CRIMSON',
    '  CYAN',
];

foreach ($colorsToParse as $value) {
    $color = Color::parse($value);
    printf("initial: '%s', rgb: %s, hex: %s\n",
           $value,
           $color->formatRgb(),
           $color->formatHex());
}
```

### Output
```
$color->formatRgb();
$color->formatHex();
```
