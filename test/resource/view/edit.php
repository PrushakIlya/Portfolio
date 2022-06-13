<?php
if (isset($_COOKIE) && !empty($_COOKIE)) {
  ?>
  <div class="error">
    <?php
    foreach ($_COOKIE as $index) {
      echo "<h2>" . $index . "</h2>";
    }
    ?>
  </div>
  <?php
}
?>

<section class="create_edit">
  <form action="/update/<?php echo $item['id'] ?>" method="POST">
    <input type="hidden" name="_METHOD" value="PUT"/>
    <div>
      <label for="name">name:</label>
      <input type="text" name="name" value="<?php echo $item['name'] ?>">
    </div>
    <div>
      <label for="price">price:</label>
      <input type="text" name="price" value="<?php echo $item['price'] ?>">
    </div>
    <div>
      <label for="description">description:</label>
      <textarea name="description" cols="15" rows="5"><?php echo $item['description'] ?></textarea>
    </div>
    <input type="submit" value="update">
  </form>
</section>



