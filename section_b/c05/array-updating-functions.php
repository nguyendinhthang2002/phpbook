<?php
// Array of items being ordered
$order = ['notebook', 'pencil', 'eraser',];
//them ptu vao dau mang
array_unshift($order, 'scissors'); // Add to start
//xoa ptu cuoi mang
array_pop($order);                 // Remove last
$items = implode(', ', $order);    // Convert to string

// Array of classes
$classes = ['Patchwork' => 'April 12th',
            'Knitting'  => 'May 4th',
            'Lettering' => 'May 18th',];
//Xóa phần tử đầu tiên khỏi một mảng và trả về giá trị của phần tử đã xóa
array_shift($classes);                   // Remove 1st
$new     = ['Origami'  => 'June 5th',
            'Quilting' => 'June 23rd',]; // New items
//hợp nhất một hoặc nhiều mảng thành một mảng
$classes = array_merge($classes, $new);  // Add to end
?>
<?php include 'includes/header.php'; ?>

<h1>Order</h1>
<?= $items ?>
<h1>Classes</h1>
<?php foreach($classes as $description => $date) { ?>
  <b><?= $description ?></b> <?= $date ?><br>
<?php } ?>

<?php include 'includes/footer.php'; ?>