<?php


class ShopProduct
{
    public $title = "default product";
    public $producerMainName = "main name";
    public $producerFirstName = "first name";
    public $price = 0;

    function __construct($title, $producerMainName, $producerFirstName, $price)
    {
        $this->title = $title;
        $this->producerMainName = $producerMainName;
        $this->producerFirstName = $producerFirstName;
        $this->price = $price;
    }

    public function getProducer()
    {
        return "{$this->producerFirstName}" .
            "   {$this->producerMainName}";
    }
}

$product1 = new ShopProduct("My Antonia", "Willa", "Cather", "5.99");

print $product1->getProducer();
/* *  *  *  *  *  *  *  *  *  *  *
        Cather   Willa
 *  *  *  *  *  *  *  *  *  *  * */