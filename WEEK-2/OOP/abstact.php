<?php

abstract class clothes{
    abstract protected function shirt($a); 
}

class man extends clothes{
    public function shirt($a){
        return "This shirt is $a";
    }
}

class woman extends clothes{
    public function shirt($a){
        return "This shirt is $a";
    }
}

$shirt= new man;
echo $shirt->shirt("Blue");

echo "<br>";

$shirt= new woman;
echo $shirt->shirt("Pink");
?>  