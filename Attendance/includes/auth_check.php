<?php
    if(!isset($_SESSION['userid'])){
        echo "<script type='text/javascript'> document.location = './login.php'; </script>";
    }
?>