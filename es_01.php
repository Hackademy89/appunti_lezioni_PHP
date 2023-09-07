<?php

//Dato un array contenente una serie di array associativi di utenti con nome, 
/* cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome”  o 
“Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere */

//creare array di utenti
//per ogni utente presente nell'array utenti
    //se il genere è M
        //stampa "Buongiorno Sig. Nome e Cognome"
    //se il genere è F
        //stampa "Buongiorno Sig.ra Nome e Cognome"
    //altrimenti
        //stampa "Buongiorno Nome e Cognome"


$users = [
    [
        "name" => "Francesco",
        "surname" => "Orlando",
        "gender"=> "M"
    ],
    [
        "name" => "Alessandro",
        "surname" => "Ciccia",
        "gender"=> "M"
    ],
    [
        "name" => "Pasqualina",
        "surname" => "Ciarleglio",
        "gender"=> "F"
    ],
    [
        "name" => "Valerio",
        "surname" => "Vacca",
        "gender"=> "L"
    ]
];

var_dump($users);

foreach($users as $user){
    if($user['gender'] == "M"){
        echo "Buongiorno Sig. $user[name] $user[surname] \n";
    }elseif($user['gender'] == "F"){
        echo "Buongiorno Sig.ra $user[name] $user[surname] \n";
    }else{
        echo "Buongiorno $user[name] $user[surname] \n";
    }
}