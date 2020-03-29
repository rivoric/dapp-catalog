<?php
  require('session.php');
  require('header.php');
?>
  <h1>Catalog</h1>
  <?php
echo "My favourite movie is ";
echo $_REQUEST['name'];
  ?>
<?php
  require('footer.php');
?>
