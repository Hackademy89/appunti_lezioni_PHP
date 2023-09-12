<?php


//! classe astratta: è una classe che rappresenta un concetto estremamente astratto 
//! e serve per dettare regole su come le classi figlie devono essere implementate

//la classe astratta non può mai essere istanziata
/* abstract class User{
    public $username;
    public $email;
    protected $password;

    public function __construct($username,$email,$password){
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    abstract public function saluta();
}


class Student extends User{
    public $subjects;

    public function __construct($username,$email = "ciao",$password,$subjects){
        parent::__construct($username,$email,$password);//stiamo invocando il costruttore della classe padre
        
        $this->subjects = $subjects;
    }

    public function saluta(){
        echo "Ciao, sono $this->username e studio $this->subjects \n";
    }
} */


/* class Teacher extends User{
    public $salary;

    public function __construct($username,$email,$password,$salary){
        parent::__construct($username,$email,$password);
        
        $this->salary = $salary;
    }

    public function saluta(){
        echo "Buongiorno, sono $this->username e guadagno $this->salary \n"; 
    }
} */


/* $user = new User("Donato","donato@gmail.com","123456"); */

/* $student = new Student("Stefano","stef@gmail.com","1234","informatica");

$student->saluta();

$teacher = new Teacher("Valerio","val@gmail.com","123456","120000");

$teacher->saluta(); */



//! dependecy injection: ci permette di far dipendere il funcionamente di una classe da un altra classe

class Manichino{
    use Jetpack;

    public $braccia;
    public $gambe;

    public function __construct(Braccia $braccia, $gambe){//dependecy injection
        $this->braccia = $braccia;
        $this->gambe = $gambe;
    }
}

abstract class Braccia{
    abstract public function attacca();
}

class Pugno extends Braccia{
    public function attacca(){
        echo "Ti tiro un pugno! \n";
    }
}

class Ceffone extends Braccia{
    public function attacca(){
        echo "Ti tiro un ceffone! \n";
    }
}

class Gamba{
    public function muoviti(){
        echo "Mi sto muovendo!";
    }
}

$pugno = new Pugno();
$pinocchio = new Manichino($pugno,"gambe");//object composition

/* $pinocchio->braccia->attacca(); */

$pinocchio->vola();


//! traits: sono porzioni di codice che non c'entrano con ciò che una classe rappresenta

trait Jetpack
{
    public function vola(){
        echo "Ciao mamma, sto volando!";
    }
}
