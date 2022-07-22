<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="<?= $meta['keywords'] ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title><?= $meta['title'] ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav nav-pills">
            <li><a href="page/about">About</a></li>
            <?php foreach ($menu as $item): ?>
                <li><a href="category/<?= $item ?>"><?= $item['title'] ?></a></li>
            <?php endforeach; ?>
            <li><a href=""></a></li>
        </ul>
    </div>
</nav>
<?= $content ?>


</body>
</html>