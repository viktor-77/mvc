<?php

namespace Project\Controllers;

use \Core\Controller;

//Сделайте контроллер TestController с действиями act1, act2 и act3.
// Сделайте три роута, задающие адреса, по которым можно будет обратиться к этим действиям.
// Проверьте работу созданного вами кода, по очереди обратившись через адресную строку к каждому из действий.
class TestController extends Controller
{
    public function act1()
    {
        echo '1';
    }

    public function act2()
    {
        echo '2';
    }

    public function act3()
    {
        echo '3';
    }
}