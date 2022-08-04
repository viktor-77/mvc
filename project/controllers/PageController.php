<?php

namespace Project\Controllers;

use Core\Controller;
use \Project\Models\Page;

// подключаем нашу модель

class PageController extends Controller
{
    public $title = 'page';
    private $pages = [];

    public function __construct()
    {
        $this->pages = [
            1 => ['title' => 'страница 1', 'text' => 'текст страницы 1'],
            2 => ['title' => 'страница 2', 'text' => 'текст страницы 2'],
            3 => ['title' => 'страница 3', 'text' => 'текст страницы 3'],
        ];
    }

    public function act()
    {
        return $this->render('page/act', [
            'header' => 'список юзеров',
            'users' => ['user1', 'user2', 'user3'],
        ]);
    }

    public function show($params)
    {
        $this->title = $this->pages[$params['id']]['title'];
        return $this->render('page/show', [$this->pages[$params['id']]['text']]);
    }

    public function test()
    {
        $page = new Page; // создаем объект модели

        $data = $page->getById(3); // получим запись с id=3
        print_r($data);

//        $data = $page->getByRange(2, 5); // записи с id от 2 до 5
//        print_r($data);
    }
}