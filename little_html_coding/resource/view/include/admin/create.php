<form action="<?php echo $_SERVER['HTTP_HOST']?>/admin/store" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label>
  <input type="text" name="name">
  <label for="price">price:</label>
  <input type="number" name="price">
  <label for="description">description:</label>
  <input type="text" name="description">
  <label for="file">add img:</label>
  <input type="file" name="file">
  <input type="submit" value="Send">
</form>

