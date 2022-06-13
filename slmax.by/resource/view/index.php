<?php
include_once 'svg.php';

use Prushak\SlmaxBy\HTTP\Controller\FrontController;

?>
<section class="index">
  <form action="/filter" method="GET">
    <label for="filter">delete:</label>
    <input type="text" name="filter" placeholder="example: 1-4">
    <input type="submit" value="click">
  </form>
  <table>
    <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Lastname</th>
      <th>Age</th>
      <th>Sex</th>
      <th>City</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($result as $item) {
      ?>
      <tr>
        <td><?= $item['id'] ?></td>
        <td><?= $item['name'] ?></td>
        <td><?= $item['lastname'] ?></td>
        <td><?= FrontController::get_age($item['age']) ?></td>
        <td><?= FrontController::get_sex($item['sex']) ?></td>
        <td><?= $item['city'] ?></td>
        <td class="icon"><a href="/destroy/<?php echo $item['id'] ?>"><?php echo delete_svg() ?></a></td>
        <td class="icon"><a href="/edit/<?php echo $item['id'] ?>"><?php echo edit_svg() ?></a></td>
      </tr>
      <?php
    }
    ?>
    </tbody>
  </table>
  <button class="btn"><a href="/create">Create</a></button>
</section>