<?php

//estrapolamento, incapsulamento ed astrazione
function checkLenght($string)
{
    if (strlen($string) >= 8) {
        return true;
    }
    echo "La password deve essere maggiore di 8 caratteri \n";
    return false;
}

function checkUpper($string)
{
    for ($i = 0; $i < strlen($string); $i++) {
        if (ctype_upper($string[$i])) {
            return true;
        }
    }
    echo "La password deve avere almeno un carattere maiuscolo \n";
    return false;
}


function checkNumber($string)
{
    for ($i = 0; $i < strlen($string); $i++) {
        if (is_numeric($string[$i])) {
            return true;
        }
    }
    echo "La password deve avere almeno un valore numerico \n";
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
    echo "La password deve acere almeno un carattere speciale \n";
    return false;
}



/* if(checkLenght($password) && checkNumber($password) && checkUpper($password) && checkSpecial($password)){
    echo "Password valida"; 
}else{
    echo "Password non valida";
} */



// richiesta password
/* while($check){
    if(checkLenght($password) && checkNumber($password) && checkUpper($password) && checkSpecial($password)){
        echo "Password valida"; 
        $check = true;
    }else{
        $password = readline("Inserisci la password: ");
        echo "Password non valida";
        $check = false;
    }
} */

/* $password = readline("Inserisci la password: ");
while(!(checkLenght($password) && checkNumber($password) && checkUpper($password) && checkSpecial($password))){
    $password = readline("Inserisci la password: ");
} */

do{
    $password = readline("Inserisci la password: ");
}while(!(checkLenght($password) && checkNumber($password) && checkUpper($password) && checkSpecial($password)));
