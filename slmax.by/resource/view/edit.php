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
      <label for="lastname">lastname:</label>
      <input type="text" name="lastname" value="<?php echo $item['lastname'] ?>">
    </div>
    <div>
      <label for="age">age:</label>
      <input type="text" name="age" value="<?php echo $item['age'] ?>">
    </div>
    <div>
      <label for="sex">sex:</label>
      <select name="sex">
        <option value="1">male</option>
        <option value="2">female</option>
      </select>
    </div>
    <div>
      <label for="city">city:</label>
      <input type="text" name="city" value="<?php echo $item['city'] ?>">
    </div>
    <input type="submit" value="update">
  </form>
</section>



