<?php

//! OOP: permette di strutturae il codice in blocchi che servono ad istanziare un nuovo oggetto. Questi blocchi
//prendono il nome di CLASSI

$user = [
    "username" => "Pippo99",
    "email" => "pippo@gmail.com",
    "password" => "12345678"
];

$user2 = [
    "username" => "Pippo80",
    "email" => "paperino@gmail.com",
    "password" => "12345678"
];

$users = [
    [
        "username" => "Pippo99",
        "email" => "pippo@gmail.com",
        "password" => "12345678"
    ],
    [
        "username" => "Pippo80",
        "email" => "paperino@gmail.com",
        "password" => "12345678"
    ]
];



//abbiamo descritto come un utente deve essere all'interno del nostro sito, ossia deve essere formato da: username, email, pass
//la classe descrive com sarà l'utente
class User{
    //attributi
    public $username;
    public $email;
    protected $password;

    static public $count;

    //costruttore: una normale funzione che deve avere un nome specifico
    public function __construct($username,$email,$password){//parametri formali
        //l'obiettivo del costruttore è quello di costruire l'oggetto (valorizzare gli attributi)
        $this->username = $username;//il this indica il futuro oggetto che andremo ad istanziare
        $this->email = $email;
        $this->password = $password;


        self::$count++;
    }

    //metodi
    public function saluta(){
        echo "Ciao, sono $this->username \n";
    }

    //metodo statico può essere invocato anche senza istanziare un oggetto
    static public function print(){
        var_dump(self::$count);
    }
}

$user = new User("Givanni","giova@gmail.com","12345678");//istanziando un nuovo oggetto e richiamando automaticamente il metodo __construct
/* $user2 = new User("Donato","d@gmail.com","12345"); */

/* $user->saluta(); */
/* $user2->saluta(); */

/* User::print(); */


//! ereditarietà
//la possibilità per una classe di poter ereditare metodi e attributi ad un altra classe con l'obiettivo di specializzare ulteriormente
class Student extends User{
    public $subjects;

    public function __construct($username,$email = "ciao",$password,$subjects){
        parent::__construct($username,$email,$password);//stiamo invocando il costruttore della classe padre
        
        $this->subjects = $subjects;
    }

    public function watchLesson(){
        echo "Guarda la lezione di PHP";
    }
}
$riccardo = new Student("Riccardo","ric@gmail.com","1234","matematica");
$riccardo->saluta();
$riccardo->watchLesson();

class Teacher extends User{
    public $salary;

    public function __construct($username,$email,$password,$salary){
        parent::__construct($username,$email,$password);//stiamo invocando il costruttore della classe padre
        
        $this->salary = $salary;
    }

    public function showPassword(){
        echo $this->password;
    }
}

$valerio = new Teacher("Valerio","valerio@gmail.com","1234","30000");


$valerio->showPassword();


//! access modifiers
//? public:
    //consente di accedere ad un attributo o ad un metodo in qualsiasi punto del codice
//? protected
    //consente di accedere ad un attributo o metodo solo alle classi figlie
//? private
    //consente di accedere ad un attributo o metodo solo ed esclusivamente alla classe stessa





class Product{
    public $name;
    public $description;
    public $price;

    public function __construct($name,$description,$price){
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }
}

$barilla = new Product("Pasta","1.2","Farina integrale");
var_dump($barilla);
$riomare = new Product("Scatoletta di tonno","2","Fresco e pescato 2 mesi fa");
var_dump($riomare);