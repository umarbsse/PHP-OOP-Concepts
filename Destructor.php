<?php
    class Fruit{
        public $name;
        public $color;

        function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }

        function __destruct(){
            echo "The fruit is {$this->name} and the fruit color is {$this->color}";
            echo "<br>";
        }
    }


    $apple = new Fruit("Apple","red");

    $mango = new Fruit("Mango","yellow");
?>