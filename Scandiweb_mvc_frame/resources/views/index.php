<section class="index_section">
  <div class="index wrapper">
    <form action="/destroy" method="POST">
      <div class="index_header">
        <h1>Product List</h1>
        <div class="index_btn">
          <a href="/create" class="btn_main btn">ADD</a>
          <input type="submit" class="btn_delete btn" value="MASS DELETE">
        </div>
      </div>
      <div class="index_blocks">
        <?php include "../resources/views/blocks/index_block.php" ?>
      </div>
    </form>
  </div>
</section>