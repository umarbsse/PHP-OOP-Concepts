<?php 
        #PHP - What are Abstract Classes and Methods?
        
        
        #Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.
        
        #An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.
        
        #An abstract class or method is defined with the abstract keyword:

        abstract class ParentClass{
            abstract public function someMethod1();
            // Abstract method can not be private
            abstract private function someMEthod2();

            abstract protected function someMEthod3($var1, $var2);
        }

        ## When inheriting from an abstract class, the child class method must be defined with the same name, and the same or a less restricted access modifier. So, if the abstract method is defined as protected, the child class method must be defined as either protected or public, but not private. Also, the type and number of required arguments must be the same. However, the child classes may have optional arguments in addition.
        
        
        #So, when a child class is inherited from an abstract class, we have the following rules:
        
        #The child class method must be defined with the same name and it redeclares the parent abstract method
        
        #The child class method must be defined with the same or a less restricted access modifier
        
        #The number of required arguments must be the same. However, the child class may have optional arguments in addition
?>