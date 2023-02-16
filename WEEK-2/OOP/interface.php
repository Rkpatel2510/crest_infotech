<?php
 
    interface calc{
        public function mod($c);
    }

    class sum implements calc{
        public function mod($c){
            echo $c ."<br>" ."<br>";
        }
    } 

    class sub implements calc{
        public function mod($c){
            echo $c ."<br>" ."<br>";
        }
    } 

    class multipal implements calc{
        public function mod($c){
            echo $c ."<br>" ."<br>";
        }
    } 

    class div implements calc{
        public function mod($c){
            echo $c;
        }
    } 
    
    $a=100;
    $b=5;

    $sum = new sum;
    echo $sum->mod($a+$b);

    $sub = new sub;
    echo $sub->mod($a-$b);

    $multipal = new multipal;
    echo $multipal->mod($a*$b);

    $div = new div;
    echo $div->mod($a/$b);
?>