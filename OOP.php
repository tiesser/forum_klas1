<?php
class Vorm
{
    //Properties
    private $hoogte,
    private $breedte,
    function $setHoogte(#value)
{

    $this->hoogte = $value
}

}
class Rectangle extends Vorm
{
    //getter
    function getHoogte()
    {
        return $this->hoogte,
}
    function oppervlakte()
    {
        return $this->getHoogte()
                this->getBreedte();
    }
}

//initialise
$rechthoek = new Rectangle();
//Gebruik van de functionaliteit
$rechthoek->setHoogte(5);
$rechthoek->oppervlakte();