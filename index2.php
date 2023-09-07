<?php

//una funzione è una porzione di codice riutilizzabile, può essere richiamata in vari punti del nostro codice

//built-in: date direttamente da PHP: count, var_dump, echo, print_r
//user funztion: funzioni create da noi


//? dichiarato una funzione
function nomeFunzione( /* parametri formali */)
{
    /* istruzioni */
    return 5; /* ci permette di far uscire un dato dalla funzione */
}

//? invacazione
nomeFunzione();



//funzione che faccia la somma di due numeri
function sum($num1, $num2)
{ /* parametri formali */
    echo $num1 + $num2 . "\n";
}

/* sum(2,2); *///parametri reali: il passaggio dei parametri è posizionale
/* sum(2,3);
sum(12.5,-3); */

//! scope: porzione di codice in cui è visibile una variabile

//? globale (JS): una variabile dichiara all'esterno di una funzione può essere utilizzata anche all'interno di essa

/* let x=5;

function print(){
    console.log(x);
} */

//? locale (PHP): una variabile dichiara all'esterno di una funzione non può essere utilizzata anche all'interno di essa



/* function test(){
    $y = 10;
    return $y;
}

$prova = test();

echo $y;



$x = 1;

function test2($num){
    echo $num;
}

test2($x); */


/* function differenza($x,$y){
    $diff = $x - $y;
    $array = [$diff,$x,$y];
    return [$diff,$x,$y];
} */

/* $result = differenza(2,1);

var_dump($result[0]); */



//? parametri: 
// passaggio per valore
/* $x = 5;
$y = 1;
function differenza($num, $num1)
{
    $diff = $num - $num1;
    return $diff;
}

echo differenza($x,$y);

echo $x; */

// passaggio per riferimente: non più utilizzando la copia del parametro formale
// ma sto utilizzando l'indirizzo della locazione di memoria

/* $x = 5;
$y = 1;
function differenza(&$num, &$num1)
{
    $num1 = $num1 - $num;
}

differenza($x,$y);

echo $x;
echo $y; */


//? parametri formali di default

/* $x = 5;
$y = 1;
function differenza($num, $num1 = 0)
{
    return  $num - $num1;
}

echo differenza($x); */

//? parametro variabile

/* function differenza(...$nums)
{
    $diff = 0;
    foreach($nums as $num){
        $diff = $diff - $num;
    }
    return $diff;
}

echo differenza(5,4,3,7,1,1,2,3); */


//? callback: funzione passata come parametro ad un altra funzione

function differenza(...$nums)
{
    $diff = array_reduce($nums, function($diff,$num) { //funzione anonima e callback
        return $diff - $num;
    });
    
    return $diff;
}

echo differenza(5,4,3,7,1,1,2,3);

