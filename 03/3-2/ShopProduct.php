<?php


class ShopProduct
{
    public $title = "default product";
    public $producerMainName = "main name";
    public $producerFirstName = "first name";
    public $price = 0;

}

$product1 = new ShopProduct();
print $product1->title;
/* *  *  *  *  *  *  *  *  *  *  *
        default product
 *  *  *  *  *  *  *  *  *  *  * */
$product1 = new ShopProduct();
$product2 = new ShopProduct();
$product1->title = "My Antonia";
$product2->title = "Catch 22";
//php 会动态声明对象本身不存在的类，而且不会出错
$product2->title2 = "Catch 22";