<?php

class Admin {

        private static $instance;

        private function __construct(){  // private aby nie móc wykorzystac 
            echo `<p> Instancja usera została stworzona </p>`;


        }

        public static function getInstance(){ 
            if(!isset(self::$instance)){             // sprawdza czy istnieje juz instancja 
                self::$instance = new User();       // tworzy obiekt
            }
            return self::$instance; 
        }


}


$user1 = Admin::getInstance(); 
$user2 = Admin::getInstance();
$user3 = Admin::getInstance();


?>

