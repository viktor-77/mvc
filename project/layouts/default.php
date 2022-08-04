<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title></title>
    <link rel="stylesheet" href="/project/webroot/style.css">
</head>
<body>
<header>
    хедер сайта
</header>
<div class="container">
    <aside class="sidebar left">
        левый сайдбар
    </aside>
    <main>
        <?= $content ?>
    </main>
    <aside class="sidebar right">
        правый сайдбар
    </aside>
</div>
<img src="/project/webroot/download.png">
<footer>
    футер сайта
</footer>
</body>
</html>

<!--Модифицируйте файл шаблона и все ваши контроллеры так, чтобы для каждого представления выводился свой тайтл.-->