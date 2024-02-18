<?php
// Soal Pertama
// opsional 1
// $textNormal = "word";
// // $tampung = "";
// $explodeText = str_split($textNormal);
// $reverseText = array_reverse($explodeText);
// $return = implode("", $reverseText);

// echo ($return);

// Opsional 2
// $text = "World";
// $reversedText = '';

// // Iterasi dari belakang string dan tambahkan setiap karakter ke variabel baru
// for ($i = strlen($text) - 1; $i >= 0; $i--) {
//     $reversedText .= $text[$i];
// }

// echo $reversedText; // Output: dlroW olleH

// opsioanl 3
// function reverseString($str) {
//     return strrev($str);
// }

// Soal Kedua
// grow
// function grows($a, $b)
// {
//     $grow = [];

//     for ($i = 1; $i <= $b; $i++) {
//         $grow[] = ($a * $i);
//     }
//     return $grow;
// }

// soal ketiga multiply
// function multiply($a, $b)
// {
//     return $a * $b;
// }

// print_r(multiply(2, 3));

// soal ke empat make it negativity
// option one can be submit
function makeNegative($num)
{
    if ($num === 0) {
        return 0;
    } elseif ($num === -$num) {
        return $num;
    } else {
        return -$num;
    }
}

// option 2 can submit
function makeNegative1($number)
{
    // Check if the number is already negative
    if ($number >= 0) {
        // If positive or zero, make it negative
        return -$number;
    } else {
        // If already negative, return as is
        return $number;
    }
}




function positive_sum($arr)
{
    $positive = 0;
    $arrLength = count($arr);
    for ($i = 0; $i < $arrLength; $i++) {
        $num = $arr[$i];
        if ($num > 0) {
            $positive += $num;
        }
    }
    return $positive;
}

function sumPositiveNumbers($arr)
{
    $sumPositive = 0;
    foreach ($arr as $num) {
        if ($num > 0) {
            $sumPositive += $num;
        }
    }
    return $sumPositive;
}

$arr = [1, -4, 7, 12];
print_r(positive_sum($arr));
