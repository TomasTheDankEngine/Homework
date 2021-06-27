<?php

class Kibiras2
{
    private $akmenuKiekis = 0;

    private static $akmenuKiekisVisuoseKibiruose = 0;

    public function prideti1Akmeni()
    {
        $this->akmenuKiekis++;
        self::$akmenuKiekisVisuoseKibiruose += $this->akmenuKiekis;
    }

    public function pridetiDaugAkmenu($kiekis)
    {
        if (!is_integer($kiekis)) {
            return;
        }
        if ($kiekis >= 1) {
            $this->akmenuKiekis += $kiekis;
            self::$akmenuKiekisVisuoseKibiruose += $this->akmenuKiekis;
        } else {
            return;
        }
    }

    public function kiekPririnktaAkmenu()
    {
        return $this->akmenuKiekis;
    }

    public static function kiekPririnktaAkmenuVis()
    {
        return self::$akmenuKiekisVisuoseKibiruose;
    }
}
