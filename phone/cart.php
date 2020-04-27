<?php
  // setcookie
  setcookie('currentPage', '../phone/cart.php', time() + 3600, '/', '', 0);
  
  include('../includes/data.php');
  include('../includes/head.php');
  include('./handler_cart.php');
  include('../phone/bodyOfCart.php');
  include('../includes/foot.php');
  
?>
  