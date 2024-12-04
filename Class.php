<?php
    class Fruit{
        //Code Goes Here
        public $name;
        public $color;


        //Method
        function set_name($name){
            $this->name = $name;
        }
        function get_name(){
            return $this->name;
        }


        function set_color($color){
            $this->color = $color;
        }
        function get_color(){
            return $this->color;
        }
    }



    // Objects are listed bellow
    $apple = new Fruit();
    $orange = new Fruit();
    $apple->set_name("Apple");
    $apple->set_color("Red");
    $orange->set_name("Orange");
    $orange->set_color("Orange");


    // Get Objects data

    echo $apple->get_name()." are ".$apple->get_color()." color ";
    echo "<br/>";
    echo $orange->get_name()." are ".$orange->get_color()." color ";

?>