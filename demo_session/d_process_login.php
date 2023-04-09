<?php
    session_start();
    // Kiem tra Du lieu voi Database
    // admin = dungkt/password = abc

    if(isset($_POST['btnLogin'])){
        // Lay tu FORM
        $user = $_POST['txtUser'];
        $pass = $_POST['txtPass'];

        // So khop voi CSDL
        if($user == 'dungkt' && $pass == 'abcd'){
            $_SESSION['AnhYeuEm'] = $user;
            header("Location:d_admin.php");
        }else{
            header("Location:d_login.php?error='Invalid user or pass'");
        }
    }


?>