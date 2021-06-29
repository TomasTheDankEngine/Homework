<?php

class Tenisininkas {

    private $vardas;
    private $kamuoliukas = false;
    private static $zaidejas1;
    private static $zaidejas2;

    private static $start = false;

    public function __construct($name) {
        $this->vardas = $name;
        if (self::$zaidejas1 === null) {
            self::$zaidejas1 = $this;
            return;
        }
        if (self::$zaidejas2 === null) {
            self::$zaidejas2 = $this;
            return;
        }
        echo '<h2>Tenisas ne futbolas, uztenka dvieju.</h2>';
    }

    public function __get($prop)
    {
        if ($prop == 'vardas') {
            return $this->vardas;
        }
    }

    public function __set($prop, $val) {
        if ($prop == 'kamuoliukas') {
            return $this->kamuoliukas = $val;
        }
    }

    public function arTuriKamuoliuka() 
    {
        return $this->kamuoliukas;
    }
    public function perduotiKamuoliuka ()
    {
        if (self::$zaidejas1 === null || self::$zaidejas2 === null) {
            echo '<h2>Negali zaisti vienas</h2>';
            die;
        }
        if (!$this->kamuoliukas && self::$start) {
            echo '<h2>Perduoti negali, nes neturi kam</h2>';
            die;
        }
        $this->kamuoliukas = false;
        if ($this->vardas === self::$zaidejas1->vardas) {
            self::$zaidejas2->kamuoliukas = true;
        }
        if ($this->vardas === self::$zaidejas2->vardas) {
            self::$zaidejas1->kamuoliukas = true;
        }
    }

    public static function zaidimoPradzia() 
    {
        if (self::$zaidejas1 === null || self::$zaidejas2 === null) {
            echo '<h2>Negali zaisti vienas</h2>';
            die;
        }
        rand(0, 1) ? self::$zaidejas1->perduotiKamuoliuka() : 
        self::$zaidejas2->perduotiKamuoliuka();
        self::$start = true;
    }
}