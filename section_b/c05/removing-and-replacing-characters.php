<?php
$text = '/images/uploads/';
?>
<?php include 'includes/header.php'; ?>
<p>
  <b>Remove '/' from both ends:</b><br>
  <!-- xoa 2 ben -->
  <?= trim($text, '/') ?><br>
  <b>Remove '/' from the left of the string:</b><br>
  <!-- xoa ben trai -->
  <?= ltrim($text, '/') ?><br>
  <b>Remove 's/' from the right of the string:</b><br>
  <!-- xoa ben phai -->
  <?= rtrim($text, 's/') ?><br>
  <b>Replace 'images' with 'img':</b><br>
  <!-- thay the -->
  <?= str_replace('images', 'img', $text) ?><br>
  <b>As above but case-insensitive:</b><br>
  <!-- thay the ko phan biet hoa thuong -->
  <?= str_ireplace('IMAGES', 'img', $text) ?><br>
  <b>Repeat the string:</b><br>
  <!-- lap chuoi -->
  <?= str_repeat($text, 2) ?></p>
</p>
<?php include 'includes/footer.php'; ?>