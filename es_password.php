<?php

//validare una password (paradigma procedurale)
    //la password deve essere formata da almeno 8 caratteri
    //la password deve avere almeno una maiuscola
    //deve avere almeno un numero
    //deve avere almeno un carattere speciale


//inserimento password
//verificare lunghezza password
    //se la lunghezza della password è maggiore o uguale di 8
        //la password è valida
    //altrimenti
        //la password non è valida

//verificare maiuscola
    //per ogni carattere presente nella password
        //se il carattere è maiuscolo
            //la password è valida
        //altrimenti
            //la password non è valida

//verificare numero
    //per ogni carattere presente nella password
        //se il carattere è un numero
            //la password è valida
        //altrimenti
            //la password non è valida

//verificare del carattere speciale
    //per ogni carattere presente nella password
        //se il carattere è speciale
            //la password è valida
        //altrimenti
            //la password non è valida


$password = readline("Inserisci la password: ");

$checkLenght = false;
if (strlen($password) >= 8){
    $checkLenght = true;
}


$checkUpper = false;
for ($i=0; $i < strlen($password); $i++) { 
    if(ctype_upper($password[$i])){
        $checkUpper = true;
    }
}


$checkNumber = false;
for ($i=0; $i < strlen($password); $i++) { 
    if(is_numeric($password[$i])){
        $checkNumber = true;
    }
}

$specialChars = ["!","@","#","$","%"];
$checkSpecial = false;
foreach ($specialChars as $char) {
    for ($i=0; $i < strlen($password); $i++) { 
        if($password[$i] == $char ){
            $checkSpecial = true;
        }
    }
}

if($checkLenght && $checkNumber && $checkSpecial && $checkUpper){
    echo "Password valida";
}else{
    echo "Password non valida";
}
