<?php 
    ###Namespaces are qualifiers that solve two different problems:

    ###They allow for better organization by grouping classes that work together to perform a task

    ###They allow the same name to be used for more than one class

    ###For example, you may have a set of classes which describe an HTML table, such as Table, Row and Cell while also having another set of classes to describe furniture, such as Table, Chair and Bed. Namespaces can be used to organize the classes into two different groups while also preventing the two classes Table and Table from being mixed up.
    
    
    namespace databases;

    class Database{
        public static $host="localhost";
        public static $port="8568";
        public function get_host_name() {
            return self::$host;
        }
    }
?>