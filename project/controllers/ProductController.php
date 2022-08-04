<?php

namespace Project\Controllers;

use Core\Controller;

class ProductController extends Controller
{
    private $products;
    public $title = 'title';

    public function __construct()
    {
        $this->products = [
            1 => [
                'name' => 'product1',
                'price' => 100,
                'quantity' => 5,
                'category' => 'category1',
            ],
            2 => [
                'name' => 'product2',
                'price' => 200,
                'quantity' => 6,
                'category' => 'category2',
            ],
            3 => [
                'name' => 'product3',
                'price' => 300,
                'quantity' => 7,
                'category' => 'category2',
            ],
            4 => [
                'name' => 'product4',
                'price' => 400,
                'quantity' => 8,
                'category' => 'category3',
            ],
            5 => [
                'name' => 'product5',
                'price' => 500,
                'quantity' => 9,
                'category' => 'category3',
            ],
        ];
    }

    public function show($params)
    {
        $n = $params['n'];
        return $this->render('product/show', $this->products[$n]);
    }

    public function all()
    {
        return $this->render('product/all', $this->products);
    }

}

//Создайте контроллер Product, в конструкторе которого будет задаваться следующий массив:

//Добавьте к созданному действию представление. Используйте для этого следующую верстку:
//Данные в этой верстке соответствуют первому продукту.
// Сделайте так, чтобы представление показывало данные того продукта, который был запрошен через адресную строку.

//В контроллере Product сделайте действие all, которое будет выводить список всех продуктов в виде HTML таблицы.
// Пусть это действие обрабатывает адрес /products/all/.