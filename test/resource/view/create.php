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
  <form action="/store" method="POST">
    <div>
      <label for="name">name:</label>
      <input type="text" name="name">
    </div>
    <div>
      <label for="price">price:</label>
      <input type="text" name="price">
    </div>
    <div>
      <label for="description">description:</label>
      <textarea name="description" cols="15" rows="5"></textarea>
    </div>
    <input type="submit" value="create">
  </form>
</section>

