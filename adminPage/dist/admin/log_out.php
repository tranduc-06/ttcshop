<?php
    setcookie('userId', $row['id'], time() -100, '/', '', 0);
    header('Location:../index.php'); 
?>