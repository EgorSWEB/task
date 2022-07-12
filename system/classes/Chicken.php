<?php

class Chicken extends Animal 
{
    function __construct()
    {
        $this->typeAnimal = 'Куриц';
        $this->typeProduct = 'шт. яиц';
        $this->maxNumOfProd = 1;
        $this->minNumOfProd = 0;
    } 
}