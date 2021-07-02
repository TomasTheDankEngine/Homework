<?php

class Grybas
{

    private $valgomas;
    private $sukirmijes;
    private $svoris;

    public function __construct()
    {
        if (rand(0, 1)) {
            $this->valgomas = true;
        } else {
            $this->valgomas = false;
        }

        if (rand(0, 1)) {
            $this->sukirmijes = true;
        } else {
            $this->sukirmijes = false;
        }

        $this->svoris = rand(5, 45);
    }

    public function pickGryb()
    {
        if ($this->valgomas == true && $this->sukirmijes == false) {
            return true;
        }
        else {
            return false;
        }
    }
}
