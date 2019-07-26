<div id="prod-menu">
<ul>
  <li><a href="index.php?page=product&id=p1">Prod 1</a></li>
  <li><a href="index.php?page=product&id=p2">Prod 2</a></li>
  <li>Prod 3</li>
</ul>
</div>
<div id="prod-content">
  <?php
  switch($prod) {
    case 'p1':
      require_once 'product-1.php';
      break;
    case 'p2':
      echo 'Product 2 Image';
      break;
  }
   ?>
</div>
