<?php 
    class Messages{
        const LEAVING_MESSAGE="Thank you for your vist. Please do subscribe and like!<br>";

        public function print_const(){
            echo self::LEAVING_MESSAGE;
        }
    }
    $msg = new Messages();
    echo $msg::LEAVING_MESSAGE;  // Called Constant a way
    echo Messages::LEAVING_MESSAGE; // Or direct call without initializing object;
    echo $msg->print_const(); // Or via msg function;
?>