<?php

class Stikline
{

    private $turis;
    private $kiekis;

    public function __construct($turis)
    {
        $this->turis = $turis;
        $this->kiekis = 0;
    }

    public function getKiekis() {
        return $this->kiekis;
    }

    public function ipilti($kiekis)
    {
        if ($kiekis > $this->turis) {
            return $this->kiekis = $this->turis;
        } else {
            return $this->kiekis += $kiekis;
        }
    }

    public function ispilti() {
        $amount = $this->kiekis;
        $this->kiekis = 0;
        return $amount;
    }
}
