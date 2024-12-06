<?php
    class Fruit{
        public $name;
        protected $color;
        private $weight;

        public function set_name($name){
            $this->name = $name;
        }
        protected function set_color($color){
            $this->color = $color;
        }
        private function set_weight($weight){
            $this->weight = $weight;
        }
    }

    $mango = new Fruit();
    $mango->set_name('Mango'); // OK
    $mango->set_color('Yellow'); //Error
    $mango->set_weight('1 KG'); //Error
    
    //$mango->name = "Mango";// OK
    //$mango->color  = "Yellow"; //Error
    //$mango->weight = "1 KG"; //Error

    echo $mango->name;
    echo "<br>";
    echo $mango->color;
?>
