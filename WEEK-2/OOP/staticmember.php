<?php
namespace pro;
//static method
    class student{
        public static function name(){
            echo "Raxit Kotadiya";
       }
    }
    student::name();
    echo "<br>";

    //self
    class school {
        public static function welcome() {
          echo "Hello World!";
        }
      
        public function __construct() {
          self::welcome();
        }
      }      
      school::welcome();
      echo "<br>";
      echo "<br>";



//static properties
    class tan45{
        public static $values = 1;
    }
      echo tan45::$values;
      echo "<br>";

    //self
    class sin0{
        public static $values = 0;
        public function staticvalue(){
            return self::$values;
        }
    }  
    $sin= new sin0();
    echo $sin-> staticvalue();
?>