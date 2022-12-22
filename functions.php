<?php


function generatePsw($lengthPsw,$isCharMin,$isCharMax,$isNumeri,$isCharSpe,$isRepetition)
{
    $charMaiuscList =isset($isCharMax) ? "ABCDEFGHIJKLMNOPQRSTUVWXYZ" :'';
    $charMinList =isset($isCharMin) ? "abcdefghijklmnopqrstuvwxyz" :'';
    $numberList =isset($isNumeri) ? "0123456789" : '';
    $simbolList =isset($isCharSpe) ? "@ç%£!?§#*" :'';

    // ora genero una unica stringa dove poter estrarre i miei elementi 
    $allChar = $charMaiuscList . $charMinList . $numberList . $simbolList;
    $toReturn = "";
    
        if(isset($isRepetition) ){
            $i=0;
            while ( $i < $lengthPsw){
                if($i===strlen($allChar)){
                    break;
                }
                $char=$allChar[rand(0, strlen($allChar) - 1)];
                if(!str_contains($toReturn,$char)){
                    $toReturn .= $char;
                    $i++;                    
                }
            }


        }else{
            for ($i = 0; $i < $lengthPsw; $i++) {
                $toReturn .= $allChar[rand(0, strlen($allChar) - 1)];
            }
        }
        
    
    return $toReturn;
}
