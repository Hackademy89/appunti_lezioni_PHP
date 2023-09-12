<?php

// creare un carrello in cui possiamo aggiungere n prodotti 
// e ci deve stampare il nome, prezzo ed importo per ogni singolo prodotto e l'importo del carrello totale


//Marco: carrello oggetto, prodotti oggetto
//Francesco: carello oggetto, prodotti con classe astratte, i singoli prodotti che saranno figli dei Prodotti
//Lina: carrello oggetto con attributi: nome, prezzo

class Carrello{
    public $prodotti;
    public $importoTot;

    public function __construct(Prodotto ...$prodotti){ // dependency injection
        $this->prodotti = $prodotti;

        $this->calcolaImportoTot();
    }

    public function calcolaImportoTot(){
        foreach ($this->prodotti as $prodotto) {
            $this->importoTot += $prodotto->importo;
        }
    }
}

class Prodotto{
    public $nome;
    public $quantità;
    public $prezzo;
    public $importo;

    public function __construct($nome,$quantità,$prezzo){
        $this->nome = $nome;
        $this->quantità = $quantità;
        $this->prezzo = $prezzo;

        $this->clacolaImporto();
    }

    public function clacolaImporto(){
        $this->importo = $this->prezzo * $this->quantità;
    }
}

$spaghetti = new Prodotto("Spaghetti",2,2);
$fette_biscottate = new Prodotto("Fette Biscottate",3,1);
$pennette = new Prodotto("Pennette",1,2);
$uva = new Prodotto("Uva bianca",3,5);


$carrello = new Carrello($spaghetti,$fette_biscottate,$pennette,$uva,$uva);//object composition

var_dump($carrello);