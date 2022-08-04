<?php

use \Core\Route;

return [
    new Route('/hello', 'hello', 'index'), // роут для приветственной страницы, можно удалить

    new Route('/product/all', 'product', 'showAll'),
    new Route('/product/:id', 'product', 'showOne'),

];
	
