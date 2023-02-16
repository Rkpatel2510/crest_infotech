<?php

    class car{
        public $model, $color;
        public function __construct($m,$c)
        {
            $this->model=$m;
            $this->color=$c;
        }
        public function intro(){
        echo "This car model is $this->model and the color is {$this->color}";
    }
}
    class lambo extends car{
        public function msg(){
            echo "Am I a car or bike ?? ";
        }
    }

    $lambo= new lambo("Lamborgini", "Yellow");
    $lambo->msg();
    $lambo->intro();
?>