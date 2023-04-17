<?php

class Prodotti {
    public $nomeProdotto;
    public $animale;
    public $prezzo;
};

class Cibo extends Prodotti {
    public $pesoNetto;
    public $ingredienti;
};

class Giochi extends Prodotti {
    public $caratteristiche;
    public $dimensioni;
};

class Accessori extends Prodotti {
    public $materiale;
    public $dimensioni;
};

var_dump(new Cibo());
var_dump(new Giochi());
var_dump(new Accessori());