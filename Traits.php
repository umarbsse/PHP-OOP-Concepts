<?php 
    ###PHP only supports single inheritance: a child class can inherit only from one single parent.

    ###So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.
    
    ###Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).
    
    ###Traits are declared with the trait keyword:

    trait MessagesList{
        public function successMsg() {
            echo "Action successfully implemented<br/>";
        }
    }

    trait Notification{
        public function update_notification_list(){
            echo "updating notfication from db<br/>";
        }
    }


    class Welcome{
        use MessagesList, Notification;
    }
    
    $obj = new Welcome();
    $obj->successMsg();
    $obj->update_notification_list();
?>