<?php

    class calcu{
        public $name="sub";
        public function math($a,$b){
            return $a - $b;
        }
    }

        class sin extends calcu{
            public $name="sum";
            public function math($c,$d){
                return $c + $d;
            }
        }
   
        $answer = new sin;
        echo $answer->name;
        echo " = " .$answer->math(15,3);

        echo "<br>";

        $answer = new calcu;
        echo $answer->name;
        echo " = " .$answer->math(15,3);
?>