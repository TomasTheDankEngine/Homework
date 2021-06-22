<?php

class Kibiras1
{

    private $akmenuKiekis = 0;

    public function prideti1Akmeni()
    {
        $this->akmenuKiekis++;
        echo 'Pridetas vienas akmuo.';
    }

    public function pridetiDaugAkmenu($kiekis)
    {
        if (!is_integer($kiekis)) {
            // echo 'Galimi tik skaiciai!';
            return;
        }
        if ($kiekis >= 1) {
            $this->akmenuKiekis += $kiekis;
            echo "Prideta $kiekis akmenu.";
        }
        else {
            // echo 'Neteisingas kiekis.';
            return;
        }
    }

    public function kiekPririnktaAkmenu()
    {
        echo "Kibire akmenu: $this->akmenuKiekis";
    }
}