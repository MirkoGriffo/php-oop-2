<?php

class User
{

    protected $nome;
    protected $cognome;
    protected $eta;
    protected $livello_premium;

    //costruttore
    public function __construct($_nome, $_cognome, $_eta)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->eta = $_eta;

    }

    //metodi
    public function getFullName()
    {
        return $this->nome . ' ' . $this->cognome;
    }
    public function getEta()
    {
        return $this->eta;
    }

}
