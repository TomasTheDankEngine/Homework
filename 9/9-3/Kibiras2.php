<?php

class Kibiras2
{
    private $akmenuKiekis = 0;

    private static $akmenuKiekisVisuoseKibiruose = 0;

    public function prideti1Akmeni()
    {
        $this->akmenuKiekis++;
        echo 'Pridetas vienas akmuo.';
    }

    public function pridetiDaugAkmenu($kiekis)
    {
        if ($kiekis >= 1) {
            $this->akmenuKiekis += $kiekis;
            echo "Prideta $kiekis akmenu.";
        } else {
            echo 'Neteisingas kiekis.';
        }
    }

    public function kiekPririnktaAkmenu()
    {
        echo "Kibire akmenu: $this->akmenuKiekis";
    }
}
