<script src="./js/index.js" defer></script>
<section class="create_section">
  <div class="create wrapper">
    <form action="/store" method="POST" enctype="multipart/form-data">
      <div class="create_product">
        <h1>PRODUCT ADD</h1>
        <div class="create_btn">
          <input type="submit" class="btn_save btn" value="Save">
          <a href="/" class="btn_main btn">Cancel</a>
        </div>
      </div>
      <div class="errors"> 
        <?php 
          if($_COOKIE)
            foreach($_COOKIE as $item){
              echo $item;
            }
        ?>
        </div>
      <div class="create_input">
        <label for="sku">Sku:</label>
        <input type="text" name="sku">
      </div>

      <div class="create_input">
        <label for="name">Name:</label>
        <input type="text" name="name">
      </div>
      <div class="create_input">
        <label for="price">Price ($):</label>
        <input type="text" name="price">
      </div>
      <div class="create_input">
        <label for="image">File:</label>
        <input type="file" name="image">
      </div>
      <div id="root" class="root"></div>
    </form>
  </div>
</section>