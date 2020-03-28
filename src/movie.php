<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Movie - <?php echo $_REQUEST['name']; ?></title>
    <!-- page content 
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    -->
  </head>
  <body>
  <h1>Catalog</h1>
  <?php
echo "My favourite movie is ";
echo $_REQUEST['name'];
  ?>
  </body>
</html>