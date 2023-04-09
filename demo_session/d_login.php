<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET['error'])){
            echo "<h2 style='color:red'>{$_GET['error']}</h2>";
        }
    ?>
    <form action="d_process_login.php" method="post">
        Username: <input type="text" name="txtUser" id="">
        Password: <input type="password" name="txtPass" id="">
        <button name="btnLogin">Login</button>
    </form>
</body>
</html>