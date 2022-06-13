<section class="mainPage">
  <div class="mainPage_block wrapper">
    
    <?php
      if($_COOKIE){?>
        <div class="error"><?php echo $_COOKIE['error'] ?></div>
    <?php 
      }
    ?>
    
    <form action="/bactaria/calculate" method="GET">
      <label>Start number of red bactaria:
        <input type="text" name="red_bacteria" placeholder="1" autofocus>
      </label>
      <label>Start number of red bactaria:
        <input type="text" name="green_bacteria" placeholder="1">
      </label>
      <label>Tact:
        <input type="text" name="tact" placeholder="1">
      </label>
      <input type="submit" value="calculate" class="submit">
    </form>
  </div>
</section>