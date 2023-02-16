<?php
namespace Chess;//The namespace function always comes in the first line followed by another code
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Constant</title>
</head>

<body>
    <?php
     
    //Line
    echo "This line num. is " . __LINE__ . "<br>";

    //File
    echo __FILE__ . "<br>";

    //Dir
    echo __DIR__ . "<br>";

    //Functtion
    function Crest()
    {
        echo __FUNCTION__ . "<br>";;
    }
    Crest();

    //Class
    class Crest
    {
        public function getClassName()
        {
            return __class__ . "<br>";
        }
    }
    $obj = new Crest();
    echo $obj->getClassName();

    //Trait
    trait Sardar
    {
        function test()
        {
            echo __TRAIT__ . "<br>";
        }
    }
    class Company
    {
        use Sardar;
    }
    $a = new Company;
    $a->test();

    //Method
    class tom
    {
        public function Jerry()
        {
            return __method__ . "<br>";
        }
    }
    $obj = new tom();
    echo $obj->Jerry();

    //Namespace   
    class mickey
    {
        public function minnie()
        {
            return __namespace__ . "<br>";
        }
    }
    $obj = new mickey();
    echo $obj->minnie();

    //Classname::class
    namespace Computer_Sciecnec;

    class IT{}
 
    echo IT::class;


    ?>
</body>

</html>