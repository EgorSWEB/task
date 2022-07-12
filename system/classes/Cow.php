<?php

class Cow extends Animal 
{
    function __construct()
    {
        $this->typeAnimal = 'Коров';
        $this->typeProduct = 'л. молока';
        $this->maxNumOfProd = 8;
        $this->minNumOfProd = 12;
    } 
}