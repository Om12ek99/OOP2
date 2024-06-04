<?php

// definisco la classe category
class Category{
    private string $name;
    private string $icon;

    // quando creo la categoria mi servirà il nome della categoria
    //passo solo gli attrubuti essenziali
    public function __construct(string $_name){        //typehinting
        $this->name = $_name;
    }


    
    //name
    /**
     * Get the value of name
     */ 
    public function getName() :string       //il tipo di dato che mi ritornerà la funzione!  Meglio da usare cosi!
    {
        return $this->name;
    }


    //icon
    //per icon mettiamo sia setter che getter, perche dobbiamo prima settarlo/assegnarlo e poi richiamarlo.
    /**
     * Get the value of icon
     */ 
    public function getIcon()   :string     //il tipo di dato che mi ritornerà la funzione! 
    {
        return $this->icon;
    }

    /**
     * Set the value of icon
     *
     * 
     */ 
    public function setIcon(string $icon)          //il tipo di dato che mi ritornerà la funzione()
    {
        $this->icon = $icon;

    }
}
?>