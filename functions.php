<?php


function generatePsw($lengthPsw)
{
    $charMaiuscList = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $charMinList = strtolower($charMaiuscList);
    $numberList = "0123456789";
    $simbolList = "@ç%£!?§#*";

    // ora genero una unica stringa dove poter estrarre i miei elementi 
    $allChar = $charMaiuscList . $charMinList . $numberList . $simbolList;
    $toReturn = "";
    for ($i = 0; $i < $lengthPsw; $i++) {
        $toReturn .= $allChar[rand(0, strlen($allChar) - 1)];
    }
    return $toReturn;
}
