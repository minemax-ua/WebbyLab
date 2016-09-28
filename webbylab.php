<?php

namespace WebbyLab;

/**
 * The base class
 */
class Animal
{
    
}

/**
 * One of the derived classes
 */
class Cat extends Animal
{

    private $name;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Getter
     * 
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function meow()
    {
        return "Cat $this->name is saying meow";
    }
}


$cat = new Cat('Garfield');

var_dump(
    $cat->getName() === 'Garfield'
);

var_dump(
    $cat->meow() === 'Cat Garfield is saying meow'
);
