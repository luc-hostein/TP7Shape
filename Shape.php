<?php

abstract class Shape{
    abstract function getAeara();
}

class Square extends Shape {
    private $width=2;
    private  $height=5;

    function getAeara()
    {
        return (string)$this->width*$this->height;
    }
}

class Circle extends Shape{
    private $radius=2;
    function getAeara()
    {
        return (string)pow($this->radius,2)*pi();
    }
}


$square = new Square();
$circle = new Circle();

$tabForm = array(
    $square,
    $circle,
);


foreach ($tabForm as $class){
    echo get_class($class);
    echo " : ";
    echo $class->getAeara();
    echo "<br>";
}


?>