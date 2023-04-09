<?php
    session_start();
    if(isset($_SESSION['AnhYeuEm'])){
        unset($_SESSION['AnhYeuEm']);
        // session_destroy();
        header("Location:index.php");
    }
?>