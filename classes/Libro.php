<?php
require_once __DIR__ . '/User.php';

//classe figlia

class Libro extends User
{
    //proprietà
    protected $titolo;
    protected $scrttore;
    protected $prezzo;
    protected $livello_premium;

//costruttore
    public function __construct($_titolo, $_scrittore, $_prezzo, $_livello_premium = 0)
    {
        parent::__construct($_titolo, $_scrittore, $_prezzo);
        $this->titolo = $_titolo;
        $this->scrittore = $_scrittore;
        $this->prezzo = $_prezzo;
        $this->livello = $_livello_premium;

    }
//metodi

    public function getTitolo()
    {
        return $this->titolo;
    }

    public function getScrittore()
    {
        return $this->scrittore;
    }

    public function getPrezzo()
    {
        return $this->prezzo;
    }

}
