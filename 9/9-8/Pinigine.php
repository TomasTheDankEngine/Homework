<?php

class Pinigine {
    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;

    public function ideti($kiekis) {
        if (!is_integer($kiekis) && !is_float($kiekis)) {
            return;
        }
        if ($kiekis <= 0) {
            return;
        }
        else if ($kiekis > 0 && $kiekis <= 2) {
            $this->metaliniaiPinigai += $kiekis;
        }
        else if ($kiekis > 2) {
            $this->popieriniaiPinigai += (int) $kiekis;
        }
    }

    public function skaiciuoti() {
        $sum = round(($this->popieriniaiPinigai + $this->metaliniaiPinigai), 2);
        echo '<br>Popieriniu pinigu yra ' . round($this->popieriniaiPinigai, 2) . '.<br>';
        echo '<br>Metaliniu pinigu yra ' . round($this->metaliniaiPinigai, 2) . '.<br>';
        echo "<br>Pinigu suma yra $sum.<br>";
        // return round($this->popieriniaiPinigai, 2) . round($this->metaliniaiPinigai, 2) . $sum;
    }

    public function monetos() {
        $coins = [200, 100, 50, 20, 10, 5, 2, 1];
        $amount = round($this->metaliniaiPinigai, 2) * 100;
        if ($this->metaliniaiPinigai === 0) {
            echo 'Nera metaliniu pinigu!';
        }
        else {
            do {
                foreach ($coins as $coin) {
                    // echo "<h2>Amount: $amount; Coin: $coin</h2>";
                    if ($coin > $amount) {
                        continue;
                    }
                    else if (($amount % $coin) === 0) {
                        echo '<br>Yra ' . round($amount / $coin) . ' monetu/os/a ' . $coin . '.<br>';
                        $amount -= round($amount / $coin) * $coin;
                        break;
                    }
                    else {
                        $amount = round($amount, 2);
                        echo '<br>Yra ' . round($amount / $coin) . ' monetu/os/a ' . $coin . '.<br>';
                        // echo '<br>' . '<h2>' . ($amount % $coin) . '</h2>';
                        $amount -= round($amount / $coin) * $coin;
                        continue;
                    }
                }
            }
            while ($amount != 0);
        }
    }

    public function banknotai() {
        $notes = [500, 200, 100, 50, 20, 10, 5, 2, 1];
        $amount = round($this->popieriniaiPinigai);
        if ($this->popieriniaiPinigai === 0) {
            echo 'Nera popieriniu pinigu!';
        }
        else {
            do {
                foreach ($notes as $note) {
                    echo "<h2>Amount: $amount; Note: $note</h2>";
                    if ($note > $amount) {
                        continue;
                    }
                    else if (($amount % $note) === 0) {
                        echo '<br>Yra ' . round($amount / $note) . ' banknotu/ai/as ' . $note . '.<br>';
                        $amount -= ($amount / $note) * $note;
                        break;
                    }
                    else {
                        echo '<br>Yra ' . round($amount / $note) . ' banknotu/ai/as ' . $note . '.<br>';
                        // echo '<br>' . '<h2>' . ($amount % $coin) . '</h2>';
                        $amount -= round($amount / $note) * $note;
                        continue;
                    }
                }
            }
            while ($amount != 0);
        }
    }

}