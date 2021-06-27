<?php

class Miskas
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(){
        echo "<br>$this->name</br>";
    }

    protected function papasakok()
    {
        echo "<br><h2>Aš gyvenu miške pavadintame $this->name, o kur tu?</h2><br>";
    }
}
