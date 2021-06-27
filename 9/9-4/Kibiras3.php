<?php

class Kibiras3
{

    private $akmenuKiekis = 0;

    public function prideti1Akmeni()
    {
        $this->akmenuKiekis++;
    }

    public function pridetiDaugAkmenu($kiekis)
    {
        if (!is_integer($kiekis)) {
            return;
        }
        if ($kiekis >= 1) {
            $this->akmenuKiekis += $kiekis;
        } else {
            return;
        }
    }

    public function kiekPririnktaAkmenu()
    {
        return $this->akmenuKiekis;
    }
}
