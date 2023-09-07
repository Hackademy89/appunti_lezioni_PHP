<?php

//PHP è un linguaggio interpretato, lato server e si basa sul paradigma OOP

//PHP: hypertext preprocessor

//PHP:interpretato, può manipolare l'HTML, è in grado di interaggire con i database


//variabili: locazione di memoria
//? dichiarazione
$x;
//?assegnazione
$x = 5;

//? inizializzazione
$y = 10;

$user_name; //snake syntax

$ciao = 5;
$Ciao = 10;

//! tipi di dato: primitivi
//? interi
$num = -5;

//? decimali: con il . e non ,
$decimal = 5.4;

//? booleani: true o false
$bool = true;
$bool2 = false;

/* echo $bool2;

var_dump($bool2); */

//? stringhe: insieme di caratteri alfanumerici
$string = "Ciao, ho $num \n anni!"; //string interpolation
$string2 = 'Ciao \n $num';

/* echo $string2; */


$username = "Daniele";

$presentation = 'Ciao, ' . $username;

$welcome = "\nBenvenuto nel nostro sito!";

/* echo $presentation.$welcome; */


//! tipi di dato: composti. Un dato può contenere altri dati al suo interno
//? array
$array = []; // dichiarato un array vuoto
//? array omogeneo: contiene dati dello stesso tipo
$array = [1, 2, 3, 4, 5]; //array contente dei valori
//? array eterogeneo: non contiene dati dello stesso tipo
$array = [1, 2, true, 4, "ciao"];

//in un array, ad ogni valore corrisponde un indice. Gli indici sono 0-based
/* echo $array[4]; */

/* var_dump($array);
print_r($array);
echo $array[0]; */


//? array associativo: array formato da una coppie chiave valore
$user = [
    "surname" => "Trippetta",
    "name" => "Gabriele",
    "age" => "39"
];

$user2 = [
    "Trippetta",
    "Gabriele",
    "39"
];



/* var_dump($user["name"]); */








//! OPERATORI
//? matematici: restituiscono valori numerici
// + , * , / , -, %
$num = 2;
$num1 = "2";

$result = $num % $num1; //assegnazione e la somma

/* echo $result; */
//? confronto: restiruiscono valori booleani
// ==, ===, >, <, >=, <=, !=, !==
$bool = true;
$result2 = $num !== $num1; //assegnamo a result2 il risultato dell'operatore di uguaglianza

// differenza tra == e ===: il triplo uguale prima confronta il tipo di dato e successivamente anche il valore
// il doppio uguale confronta solo i valori

/* var_dump($result2); */

//? logici
// AND, OR, NOT
//! AND: restiruisce true solo ed esclusivamente se entrambi gli operandi sono true
$maggiore = 1 > 0;
$minore = 1 < 2;

$result3 = $maggiore && $minore;


//! OR: restituisce true se almeno uno degli operandi è true
$maggiore = 1 > 2;
$minore = 1 < 0;


$result3 = $maggiore || $minore;

/* var_dump($result3); */





//! costrutti

//? teorema di bohm e jacopini: qualsiasi problema può essere risolto tramite tre costrutti:

//sequenza
$num3 = 1;
$num4 = 5;

$sum = $num3 + $num4;

//selezione (controllo di flusso): permette di eseguire delle istruzioni invece che altre in base al verificarsi o meno di una condizione
/* if( *//* condizione *//* ){ */
/* istruzioni */
/* } */

//determinare se un utente è maggiorenne 
/* $age = 20;
if ($age < 18) { // $age < 18 = true
    echo "Sei minorenne"; //istruzione
} else {
    echo "Sei maggiorenne";
}

if ($age < 18) {
    echo "Sei minorenne";
} elseif ($age >= 18) {
    echo "Sei maggiorenne";
} else {
    echo "Età non definita";
} */


$age = 18;
/* switch ($age) {
    case $age >= 18:
        echo "Sei maggiorenne";
        break;
    case $age < 18:
        echo "Sei minorenne";
        break;
    case $age < 0:
        echo "Non esisti";
        break;
    default:
        echo "Età non valida";
} */

$color = "blue";

/* switch ($color) {
    case "bianco":
        echo "Il tuo colore preferito è il bianco";
        break;
    case "blue":
        switch ($age) {
            case $age >= 18:
                echo "Sei maggiorenne";
                break;
            case $age < 18:
                echo "Sei minorenne";
                break;
            case $age < 0:
                echo "Non esisti";
                break;
            default:
                echo "Età non valida";
        }
        break;
    case "rosso":
        echo "Il tuo colore preferito è il rosso";
        break;
    default:
        echo "Colore non definito";
} */


//iterazione: ripetizione di un blocco di codice
//? contatore, condizione, incremento

/* for(
    $i = 0; //contatore
    $i < 10;//condizione
    $i++//incremento
){ */

    /* istruzioni */
 /*    echo "ciao ";
} */

$students = ['Alessandro','Daniele','Daouda','Gabriele','Lina'];

/* echo $students[0];
echo $students[1];
echo $students[2];
echo $students[3];
echo $students[4]; */

/* for ($i=0; $i < count($students); $i++) { 
    echo $students[$i] . " ";
} */


/* $i = 0;
while($i < count($students)){
    echo $students[$i] . " ";
    $i++;
} */



foreach($students as $key => $student){
    /* istruzioni */
    echo " $key: $student";
}

















?>