<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>ADMIN</h1>
<?php
//foreach($result as $row){
//  echo 'id:'.$row['id'];
//}
//?>
<?php !($_SERVER['REQUEST_URI'] === '/admin/create')?:include '../resource/view/include/admin/create.php' ?>
</body>
</html>