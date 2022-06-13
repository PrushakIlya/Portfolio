<?php
foreach ($results as $item) {
?>
  <div class="index_block">
    <label for="<?php echo $item['id'] ?>"></label>
    <input type="checkbox" name="<?php echo $item['id'] ?>" class="delete-checkbox">
    <div class="index_block_text">
      <div class="img" style="background-image: url('img/<?php echo $item['image'] ?>')"></div>
      <p><?php echo $item['sku'] ?></p>
      <p><?php echo $item['name'] ?></p>
      <p><?php echo $item['price']." $" ?></p>
      <p><?php echo empty($item['size'])?"":"Size: ".$item['size']." MB" ?></p>
      <p><?php echo empty($item['weight'])?"":"Weight: ".$item['weight']." KG" ?></p>
      <p><?php echo empty($item['dimensions'])?"":"Dimensions: ".$item['dimensions'] ?></p>
    </div>
  </div>
<?php
}
?>