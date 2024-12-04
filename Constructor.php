<?php
    class Fruit{
        public $name;
        public $color;

        function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }

        function get_name(){
            return $this->name;
        }
        function get_color(){
            return $this->color;
        }
    }


    $apple = new Fruit("Apple","red");
    echo $apple->get_name()." ".$apple->get_color();
    echo "<br/>";

    $mango = new Fruit("Mango","yellow");
    echo $mango->get_name()." ".$mango->get_color();
    echo "<br/>";
?>