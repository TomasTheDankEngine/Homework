<?php

class Pinigine {
    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;

    public function ideti($kiekis) {
        if (!is_integer($kiekis) && !is_float($kiekis)) {
            return;
        }
        if ($kiekis <= 0) {
            // echo '<br>Neteisingas kiekis.<br>';
            return;
        }
        else if ($kiekis > 0 && $kiekis <= 2) {
            $this->metaliniaiPinigai += $kiekis;
            echo "<br>$kiekis prideta prie metaliniu pinigu.<br>";
        }
        else if ($kiekis > 2) {
            $this->popieriniaiPinigai += $kiekis;
            echo "<br>$kiekis prideta prie popieriniu pinigu.<br>";
        }
    }

    public function skaiciuoti() {
        $sum = round(($this->popieriniaiPinigai + $this->metaliniaiPinigai), 2);
        echo '<br>Popieriniu pinigu yra ' . round($this->popieriniaiPinigai, 2) . '.<br>';
        echo '<br>Metaliniu pinigu yra ' . round($this->metaliniaiPinigai, 2) . '.<br>';
        echo "<br>Pinigu suma yra $sum.<br>";
    }
}