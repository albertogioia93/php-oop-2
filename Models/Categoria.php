<?php

class Categoria {
    private $nomeProdotto;

    public function __construct($_nomeProdotto)
    {
        $this->nomeProdotto = $_nomeProdotto;
    }

    public function get_nomeProdotto(){
        return $this->nomeProdotto;
    }

    public function set_nomeProdotto($_nomeProdotto){
        $this->nomeProdotto = $_nomeProdotto;
    }
}