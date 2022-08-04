<?php

namespace Project\Controllers;

use \Core\Controller;
use \Project\Models\Product;

class ProductController extends Controller
{
    public $title = 'product';

    public function showOne($params)
    {
        $product = new Product();
        $arr = $product->getById($params['id']);
        return $this->render('product/one', $arr);
    }

    public function showAll()
    {
        $product = new Product();
        $arr = $product->getAll();
        return $this->render('product/all', $arr);
    }

}
//Пусть у вас в базе данных есть продукты. Каждый продукт содержит название,
// цену и количество, описание. Реализуйте вывод одного продукта по id и всех продуктов подобно тому,
// как это сделано в теории.
