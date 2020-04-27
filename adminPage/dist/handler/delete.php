<?php
include('../includes/data.php');
    if(isset($_GET['delete'])){
       
       $id_delete = $_GET['delete'];
      
    //    $result_delete = mysqli_query($connect,"SELECT * FROM products WHERE id = '$id_delete'");
      
    //    $delete_arr = mysqli_fetch_array($result_delete);
       echo '<script language="javascript">';
       echo 'alert("Bạn có chắc chắn muốn xóa?")';
       echo '</script>';
       $delete_product = mysqli_query($connect,"DELETE FROM products WHERE id = '$id_delete'");
       if($delete_product){
        echo '<script language="javascript">';
        echo 'alert("Xóa thành công!")';
        echo '</script>';
       }
    }
    include('../includes/header.php');
?>
