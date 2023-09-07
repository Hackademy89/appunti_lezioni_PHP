<?php

//estrapolamento, incapsulamento ed astrazione
function checkLenght($string)
{
    if (strlen($string) >= 8) {
        return true;
    }
    return false;
}

function checkUpper($string)
{
    for ($i = 0; $i < strlen($string); $i++) {
        if (ctype_upper($string[$i])) {
            return true;
        }
    }
    return false;
}


function checkNumber($string)
{
    for ($i = 0; $i < strlen($string); $i++) {
        if (is_numeric($string[$i])) {
            return true;
        }
    }
    return false;
}

function checkSpecial($string)
{
    $specialChars = ["!", "@", "#", "$", "%"];
    
    foreach ($specialChars as $char) {
        for ($i = 0; $i < strlen($string); $i++) {
            if ($string[$i] == $char) {
                return true;
            }
        }
    }
    return false;
}


$password = readline("Inserisci la password: ");

if(checkLenght($password) && checkNumber($password) && checkUpper($password) && checkSpecial($password)){
    echo "Password valida"; 
}else{
    echo "Password non valida";
}
