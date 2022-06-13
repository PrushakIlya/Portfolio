<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/app.css">
  <title>Bacteria</title>
</head>

<body>
  <header></header>
  <main>
    <?php $_SERVER['REQUEST_URI'] !== '/' ?: include '../resource/view/index.php' ?>
    <?php $_SERVER['REQUEST_URI'] !== '/answer' ?: include '../resource/view/answer.php' ?>
  </main>
  <footer></footer>
</body>

</html>