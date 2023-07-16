<?php
echo 'Part one';
echo '</br>';
//1.1
function convertorDecBin($decimal) 
{
    $binary = '';
    while ($decimal > 0) {
        $binary = ($decimal % 2) . $binary;
        $decimal = (int) ($decimal / 2);
    }
    return $binary ;
}
echo  convertorDecBin(15);
echo '</br>';
//1.2

function convertorDecRoman($decimal)
{
    if ($decimal > 3999) {
        return "Error: Number exceeds the maximum value (3999).";
    }
    
    $romanNumerals = [
        1000 => "M",
        900 => "CM",
        500 => "D",
        400 => "CD",
        100 => "C",
        90 => "XC",
        50 => "L",
        40 => "XL",
        10 => "X",
        9 => "IX",
        5 => "V",
        4 => "IV",
        1 => "I"
    ];
    
    $roman = '';
    
    foreach ($romanNumerals as $value => $symbol) {
        while ($decimal >= $value) {
            $roman .= $symbol;
            $decimal -= $value;
        }
    }
    
    return $roman;
}

echo convertorDecRoman(1);
echo '</br>';
//2.1
echo 'Part two';
echo '</br>';
function convertorBinDec($binary)
{
    $decimal = 0;
    $binaryLength = strlen($binary);
    
    for ($i = 0; $i < $binaryLength; $i++) {
        $decimal += intval($binary[$i]) * pow(2, $binaryLength - $i - 1);
    }
    
    return $decimal;
}
echo convertorBinDec('1000000');
echo '</br>';

//2.2
function convertorRomanDec($roman)
{
    $romanNumerals = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    ];

    $decimal = 0;
    $previousValue = 0;

    for ($i = 0; $i < strlen($roman); $i++) {
        $currentSymbol = $roman[$i];
        $currentValue = $romanNumerals[$currentSymbol];

        if ($currentValue > $previousValue) {
            $decimal += $currentValue - 2 * $previousValue;
        } else {
            $decimal += $currentValue;
        }

        $previousValue = $currentValue;
    }

    return $decimal;
}
echo convertorRomanDec('MCMXCIV');
echo '</br>';


?>