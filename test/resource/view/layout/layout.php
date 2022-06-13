<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/app.css">
  <title>Document</title>
</head>
<body>
<header></header>
<main>
  <?php $_SERVER['REQUEST_URI'] !== '/' ?: include '../resource/view/index.php' ?>
  <?php $_SERVER['REQUEST_URI'] !== '/create' ?: include '../resource/view/create.php' ?>
  <?php $_SERVER['REQUEST_URI'] !== '/edit/'.$this->id ?: include '../resource/view/edit.php' ?>
</main>
<footer></footer>
</body>
</html>
