<?php

class Krepsys {
    const DYDIS = 500;
    protected $kiekis = 0;
    public $grybs = [];

    public function putGryb($grybas) {
        $this->grybs[] = $grybas;
        $this->kiekis++;
    }

    public function getKiekis() {
        return $this->kiekis;
    }

    public function getGrybs() {
        foreach ($this->grybs as $gryb) {
            echo var_dump($gryb) . '<br>';
        }
    }
}