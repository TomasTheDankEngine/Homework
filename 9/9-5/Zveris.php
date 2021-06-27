<?php

class Zveris extends Miskas
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    protected function papasakok()
    {
        echo "<br><h2>Aš esu žvėris vardu $this->name.</h2><br>";
        parent::papasakok();
    }

    public function speak()
    {
        $this->papasakok();
    }
}
