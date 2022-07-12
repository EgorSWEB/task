<?php

class Farm 
{
    private $allAnimals;
    private $allProducts;
    private $lastId = 0;
    
    public function addAnimal($animal)
    {
        if($animal instanceof Animal)
        {
            $this->lastId++;
            $animal->setId($this->lastId);
            $this->allAnimals[$animal->getTypeAnimal()] []= $animal;
        }
        else
        {
            echo '<b>Неверный тип аргумента</b>'.PHP_EOL;
        }
    }

    public function addProducts()
    {
        foreach($this->allAnimals as &$arrayAnimals)
        {
            foreach($arrayAnimals as &$animal)
            {
                if(isset($this->allProducts[$animal->getTypeProduct()]))
                {
                    $this->allProducts[$animal->getTypeProduct()] += $animal->getProducts();
                }
                else
                {
                    $this->allProducts[$animal->getTypeProduct()] = 0;
                }
            }
        }
    }

    public function printProducts()
    {
        echo '<h4>Собранные продукты</h4>'.PHP_EOL;
        foreach($this->allProducts as $nameProducts => $countProducts)
        {
            echo $countProducts.' '.$nameProducts.'<br>'.PHP_EOL;
        }
    }

    public function printInfo()
    {
        echo '<h4>Животные на ферме</h4>'.PHP_EOL;
        foreach($this->allAnimals as $nameTypeAnimals => $arrayAnimals)
        {
            echo $nameTypeAnimals.': '.count($arrayAnimals).'<br>'.PHP_EOL;
        }
    }

    public function clearProducts()
    {
        $this->allProducts = [];
    }
}
