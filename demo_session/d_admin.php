<?php
    session_start();
    if(!isset($_SESSION['AnhYeuEm'])){
        header("Location:d_login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['AnhYeuEm']; ?> here</h1>
    <a href="d_logout.php">Logout</a>
</body>
</html>