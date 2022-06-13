<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/app.css">
  <title>Scandiweb</title>
</head>

<body>
  <main>
    <?php $_SERVER['REQUEST_URI'] != '/' ?: include '../resources/views/index.php' ?>
    <?php $_SERVER['REQUEST_URI'] != '/create' ?: include '../resources/views/create.php' ?>
  </main>
  <?php include '../resources/views/include/footer.php' ?>
</body>

</html>