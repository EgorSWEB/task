<?php 

include_once('system/autoload.php');   

$farm = new Farm(); //создаём ферму

for($i = 0; $i<10; $i++) //добавляем животных в хлев (10 коров и 20 кур)
{
    $farm->addAnimal(new Cow());
}
for($i = 0; $i<20; $i++)
{
    $farm->addAnimal(new Chicken());
}

$farm->printInfo(); //вывод на экран информации о количестве каждого типа животных на ферме

for($i = 0; $i<7; $i++) //7 раз (неделю) производим сбор продукции 
{
    $farm->addProducts();
}

$farm->printProducts(); //вывод на экран общего кол-ва собранных за неделю шт. яиц и литров молока

$farm->clearProducts(); //очищаем корзину с собранными продуктами

for($i = 0; $i<5; $i++) //добавляем на ферму ещё 5 кур и 1 корову
{
    $farm->addAnimal(new Chicken());
}
$farm->addAnimal(new Cow());

$farm->printInfo(); //вывод на экран информации о количестве каждого типа животных на ферме

for($i = 0; $i<7; $i++) //7 раз (неделю) производим сбор продукции
{
    $farm->addProducts();
}

$farm->printProducts(); //вывод на экран общего кол-ва собранных за неделю шт. яиц и литров молока