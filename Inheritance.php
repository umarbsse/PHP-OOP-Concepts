<?php
    class Fruit{
        public $name;
        public $color;

        public function __construct($name , $color){
            $this->name = $name;
            $this->color = $color;
        }
        protected function intro(){
            echo "The fruit is {$this->name} and the color is {$this->color}.<br>";
        }
    }
    class Mango extends Fruit{
        public $weight;
        public function __construct($name, $color, $weight){
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }
        public function intro(){
            echo "The fruit is {$this->name} & the color is {$this->color} and weight is {$this->weight}<br>";
        }
        public function message(){
            echo "I am a fruit or mango<br>";
            //$this->intro();
        }
    }
   // $mango = new Mango("Mango","Yellow","0.5 KG");
   // $mango->intro(); // OK
   // $mango->intro();  // ERROR
?>

<?php 
    ///////////////////////////////////////////////
    /// FINAL KEYWORD Prevent class inheritance ///
    ///                  START                  ///
    ///////////////////////////////////////////////
    final class Car{
        //
    }
    class Toyota extends Car{

    }  
    $corolla = new Toyota();  
    class Engine{
        //
        final public function intro(){
            echo "This is into fun<br>";
        }
    }
    class Turbofan extends Engine{
        public function intro(){
            echo "This is into fun<br>";
        }

    }  
    $Turbofan = new Turbofan();  
    $Turbofan->intro();
    ///////////////////////////////////////////////
    /// FINAL KEYWORD Prevent class inheritance ///
    ///                   END                   ///
    ///////////////////////////////////////////////
?>
