<?php

class Medis {
    public $name = 'birch';
    public $color = 'green';
    protected $height = 5;
    private $branches = 50;

    public function rustleLeaves() {
        echo "<h2> rustle rustle ~~~ $this->name </h2>";
        echo "<h2> height:  $this->height </h2>";
    }
}