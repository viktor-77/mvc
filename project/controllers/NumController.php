<?php

namespace Project\Controllers;

//Сделайте контроллер NumController, а в нем - действие sum.
// Пусть это действие обрабатывает адреса следующего вида: /nums/:n1/:n2/:n3/,
// где параметрами будут некоторые числа. Сделайте так, чтобы на экран выводилась сумма переданных чисел.

class NumController
{
    public $title = 'num';

    public function sum($params)
    {
        echo $params['n1'] + $params['n2'] + $params['n3'];
    }
}