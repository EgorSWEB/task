<?php 

abstract class Animal 
{
    protected $id;
    protected $typeAnimal;
    protected $typeProduct;
    protected $maxNumOfProd, $minNumOfProd;

    public function getProducts()
    {
        return rand($this->minNumOfProd, $this->maxNumOfProd);
    }

    public function getTypeAnimal()
    {
        return $this->typeAnimal;
    }

    public function getTypeProduct()
    {
        return $this->typeProduct;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
}