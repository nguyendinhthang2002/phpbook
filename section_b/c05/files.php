<?php
$path = 'img/logo.png';
?>
<?php include 'includes/header.php'; ?>

<!-- Hàm file_exists() kiểm tra xem một tập tin hoặc thư mục có tồn tại hay không -->
<!-- 
  PATHINFO_DIRNAME - chỉ trả về dirname 
  PATHINFO_BASENAME - chỉ trả về tên cơ sở 
  PATHINFO_EXTENSION - tiện ích mở rộng chỉ trả về 
  PATHINFO_FILENAME - chỉ trả lại tên tệp
 -->
<?php if (file_exists($path)) { ?>
  <b>Name:</b>      <?= pathinfo($path, PATHINFO_BASENAME) ?><br>
  <b>Size:</b>      <?= filesize($path) ?> bytes<br>
  <b>Mime type:</b> <?= mime_content_type($path) ?><br>
  <b>Folder:</b>    <?= pathinfo($path, PATHINFO_DIRNAME) ?><br>
<?php } else { ?>
  <p>There is no such file.</p>
<?php } ?>

<?php include 'includes/footer.php'; ?>