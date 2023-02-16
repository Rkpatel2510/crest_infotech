<?php

class calculation
{
    public $a, $b, $c;

    function div()
    {
        $this->c = $this->a / $this->b;
        return $this->c;
    }
    function multipal()
    {
        $this->c = $this->a * $this->b;
        return $this->c;
    }
}

$v1 = new calculation();
$v1->a = 54;
$v1->b = 2;

$v2 = new calculation();
$v2->a = 5;
$v2->b = 5;

echo $v1->div() . "<br>";
echo $v2->multipal() . "<br>";
echo "<br>";    

?>


<!---->
<?php

class student
{
    public $name;
    public $email;

    function set_name($name)
    {
        $this->name = $name;
        return $this->name;
    }
    function get_name($email)
    {
        $this->email = $email;
        return $this->email;
    }
}

$m1 = new student();
$m1->name = "Raxit";

$m2 = new student();
$m2->email = "rakshit007@gamil.com";

echo $m1->name ."<br>";
echo $m2->email."<br>";
echo "<br>";
?>


<!---->
<?php
class Fruit
{
    // Properties
    public $name;
    public $color;

    // Methods
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
    function set_color($color)
    {
        $this->color = $color;
    }
    function get_color()
    {
        return $this->color;
    }
}

$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
?>