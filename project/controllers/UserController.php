<?php

namespace Project\Controllers;

use http\Params;

class UserController
{
    private $users;

    public function __construct()
    {
        $this->users = [
            1 => ['name' => 'user1', 'age' => '23', 'salary' => 1000],
            2 => ['name' => 'user2', 'age' => '24', 'salary' => 2000],
            3 => ['name' => 'user3', 'age' => '25', 'salary' => 3000],
            4 => ['name' => 'user4', 'age' => '26', 'salary' => 4000],
            5 => ['name' => 'user5', 'age' => '27', 'salary' => 5000],
        ];
    }

    public function show($params)
    {
        $userId = $this->users[$params['id']];
        echo 'name:' . $userId['name'] . ' ' .
            'age:' . $userId['age'] . ' ' .
            'salary:' . $userId['salary'];
    }

    public function info($params)
    {
        $userId = $params['id'];
        $key = $params['key'];
        echo $this->users[$userId][$key];
    }

    public function all()
    {
        foreach ($this->users as $user) {
            echo $user['name'] . '<br>';
        }
    }

    public function first($params)
    {
        $n = $params['n'];
        for ($i = 1; $i <= $n; $i++) {
            echo $this->users[$i]['name'] . '<br>';
        }
    }

}

//Реализуйте контроллер UserController, содержащий следующий массив:

//В контроллере UserController, сделайте действие show, которое будет выводить юзера по определенному id.
// Пусть оно будет доступно по адресу следующего вида: /user/:id/.

//В контроллере UserController, сделайте действие info, которое будет выводить имя или возраст заданного юзера.
// Пусть это действие будет доступно по адресу следующего вида: /user/:id/:key/,
// где key будет иметь значение 'name', 'age' или 'salary'.

//В контроллере UserController, сделайте действие all, которое будет выводить список всех юзеров на экран.
// Пусть это действие будет доступно по адресу следующего вида: /user/all/ (параметров тут никаких не будет).

//В контроллере UserController, сделайте действие first, которое будет выводить список N первых юзеров на экран.
// Пусть это действие будет доступно по адресу следующего вида: /user/first/:n/,
// где в параметре будет количество юзеров, которые следует вывести на экран.
