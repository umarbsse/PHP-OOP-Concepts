<?php

    ###PHP - What are Interfaces?
    
    ###Interfaces allow you to specify what methods a class should implement.
    
    ###Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".
    
    ###Interfaces are declared with the interface keyword:

    interface interfaceName{
        public function someMEthod1();
        public function someMethod2($name, $color);
        public function someMethod3();
    }


    ###PHP - Interfaces vs. Abstract Classes
    ###Interface are similar to abstract classes. The difference between interfaces and abstract classes are:

    ###Interfaces cannot have properties, while abstract classes can
    ###All interface methods must be public, while abstract class methods is public or protected
    ###All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
    ###Classes can implement an interface while inheriting from another class at the same time
    ###PHP - Using Interfaces
    ###To implement an interface, a class must use the implements keyword.

    ###A class that implements an interface must implement all of the interface's methods.



    interface Animal{
        public function makeSound();
    }
    class cat implements Animal {
        public function makeSound() {
            echo "Meow from class {".get_class($this)."}";
        }
    }

    class Dog implements Animal{
        public function makeSound()  {
            echo "Bark from class {".get_class($this)."}";
        }
    }


    class Mouse implements Animal{
        public function makeSound()  {
            echo "Squeak from class {".get_class($this)."}";            
        }
    }

    $cat = new Cat();
    //$cat->makeSound();

   # echo "<br/>";


    $dog = new Dog();
    //$dog->makeSound();


   # echo "<br/>";


    $mouse = new Mouse();
    //$mouse->makeSound();


    $animals = array($cat, $dog, $mouse);


    foreach ($animals as $animal) {
        $animal->makeSound();
        echo "<br/>";
    }




?>