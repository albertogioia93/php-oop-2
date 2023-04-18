<?php

class Prodotti
{
    private $nomeProdotto;
    private $animale;
    private $prezzo;

    public function __construct($_nomeProdotto, $_animale, $_prezzo)
    {
        $this->nomeProdotto = $_nomeProdotto;
        $this->animale = $_animale;
        $this->prezzo = $_prezzo;
        
    }

    public function get_nomeProdotto(){
        return $this->nomeProdotto;
    }

    public function set_nomeProdotto($_nomeProdotto){
        $this->nomeProdotto = $_nomeProdotto;
    }

    public function get_animale(){
        return $this->animale;
    }

    public function set_animale($_animale){
        $this->animale = $_animale;
    }

    public function get_prezzo(){
        return $this->prezzo;
    }

    public function set_prezzo($_prezzo){
        $this->prezzo = $_prezzo;
    }
};

class Cibo extends Prodotti
{
    private $pesoNetto;
    private $ingredienti;
};

class Giochi extends Prodotti
{
    private $caratteristiche;
    private $dimensioni;
};

class Accessori extends Prodotti
{
    private $materiale;
    private $dimensioni;
};

var_dump(new Cibo());
var_dump(new Giochi());
var_dump(new Accessori());