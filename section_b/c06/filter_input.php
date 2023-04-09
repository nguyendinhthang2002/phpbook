<!-- Kiểm tra xem biến bên ngoài "email" có được gửi 
đến trang PHP hay không, thông qua phương thức 
"get" và cũng kiểm tra xem đó có phải là địa chỉ 
email hợp lệ hay không -->
<!-- Hàm filter_input() nhận một biến bên ngoài 
(ví dụ: từ đầu vào của biểu mẫu) và tùy ý 
lọc biến đó. -->
<?php $location = filter_input(INPUT_GET, 'city'); ?>
<?php include 'includes/header.php'; ?>

<a href="filter_input.php?city=London">London</a> | 
<a href="filter_input.php?city=Sydney">Sydney</a>
<pre><?php var_dump($location); ?></pre>

<?php include 'includes/footer.php'; ?>