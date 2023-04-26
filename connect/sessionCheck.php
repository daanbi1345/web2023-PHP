<?php
    if(!isset($_SESSION['memberID'])){
        Header("Location:../longin/login.php");
    }
?>