<?php

// E2.1
// using check per character
function checkIfVowelOrConsonant($char){
    $result = "consonants";
    $char = strtoupper($char);
    if($char == 'A' || $char == 'E' || $char == 'I' || $char == 'O' || $char == 'U'){
        $result = "vowel";
    }

    return $char.' is a '.$result;
}

// using character in array
function checkIfVowelOrConsonant_arr($char){
    $vowels = ['A','E','I','O','U'];
    $result = "consonants";
    $char = strtoupper($char);
    if(in_array($char, $vowels)){
        $result = "vowel";
    }

    return $char.' is a '.$result;
}

// E2.2
function convertDigitToWord($value){
    $numberWord = [
        '0'=>'Zero',
        '1'=>'One',
        '2'=>'Two',
        '3'=>'Three',
        '4'=>'Four',
        '5'=>'Five',
        '6'=>'Six',
        '7'=>'Seven',
        '8'=>'Eight',
        '9'=>'Nine',
    ];

    $valueArr = str_split($value);
    
    $result = '';
    foreach($valueArr as $number){
        $result .= $numberWord[$number].' ';
    }

    return $result;

}


// E2.3
function isDivisibleByThree($value){
    return $value % 3 === 0 ? $value. ' is divisible by 3' : $value. ' is not divisible by 3';
}

function isDivisibleByThree_Bool($value){
    return $value % 3 === 0;
}

function isDivisibleByThree_str($value){
    return $value % 3 === 0 ? 'true' : 'false';
}

// E2.4
function deleteDuplicate($list){
    //return array_unique($list);

    $uniqueList = [];
    $previousValue = null;
    foreach($list as $value){
        if($previousValue != $value){
            array_push($uniqueList, $value);
            $previousValue = $value;
        }
    }

    return $uniqueList;
}

// E2.5
function isArmstrongNumber($number){
    
    $digits = str_split($number);
    $sum = 0;
    foreach($digits as $value){
        $sum += $value ** count($digits);
    }

    if($sum == $number){
        return $number .' is an Armstrong Number';
    }else{
        return $number .' is not an Armstrong Number';
    }
}

function isArmstrongNumber_bool($number){
    
    $digits = str_split($number);
    $sum = 0;
    foreach($digits as $value){
        $sum += $value ** count($digits);
    }

    return $sum == $number;
}


