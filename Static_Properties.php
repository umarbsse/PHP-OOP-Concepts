<?php 
    ###Static properties can be called directly - without creating an instance of a class.

    ###Static properties are declared with the static keyword:


    ###Here, we declare a static property: $value. Then, we echo the value of the static property by using the class name, double colon (::), and the property name (without creating a class first).


    class Database{
        public static $host="localhost";
        public static $port="8568";
        public function get_host_name() {
            return self::$host;
        }
    }

    ###To call a static property from a child class, use the parent keyword inside the child class:



    class MySql extends Database{
        public function get_port(){
            return parent::$port;
        }
    }

    #echo Database::$host;
    $db = new Database();
    echo $db->get_host_name()."<br/>";
    $mysql = new MySql();
    echo $mysql->get_port()."<br/>";
?>