<?php 
$prefix  = 'Thank you';
$name    = 'Ivy';
$message = $prefix . ', ' . $name;

$mausac = ['green' => 'green', 'red' => 'red'];

echo '<h1 style="color:'.$mausac['green'].'">Hello World</h1>';
echo "<h1 style='color:{$mausac['green']}'>Hello World</h1>"
?>
<!DOCTYPE html>
<html>
  <head>
    <title>String Operator</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2><?= $name ?>'s Order</h2>
    <p><?= $message ?></p>
  </body>
</html>