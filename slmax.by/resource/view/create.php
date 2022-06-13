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
      <input type="text" name="name" placeholder="name">
    </div>
    <div>
      <label for="lastname">lastname:</label>
      <input type="text" name="lastname" placeholder="lastname">
    </div>
    <div>
      <label for="age">age:</label>
      <input type="text" name="age" placeholder="format: 1997-04-20">
    </div>
    <div>
      <label for="sex">sex:</label>
      <select name="sex">
        <option value="1">male</option>
        <option value="0">female</option>
      </select>
    </div>
    <div>
      <label for="city">city:</label>
      <input type="text" name="city" placeholder="city">
    </div>
    <input type="submit" value="create">
  </form>
</section>

