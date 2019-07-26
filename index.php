<?php
$load = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
$prod = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>This is our site</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div id="container">
        <div id="header">
        </div>
        <div id="navi">
          <ul class="nav-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?page=product">Products</a></li>
            <li><a href="index.php?page=services">Services</a></li>
            <li>Gallery</li>
            <li>About Us</li>
            <li>Contact Us</li>
          </ul>
        </div>
        <div id="content">
          <?php
          switch ($load) {
            case 'product':
              require_once('product.php');
              break;
            case 'services':
                require_once('services.php');
                break;

            default:
              require_once('home.php');
              break;
          }
           ?>
        </div>
        <div id="footer">
        </div>

    </div>
  </body>
</html>
