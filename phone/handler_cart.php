<?php
include('../includes/data.php');
    // session_start();  //Session có thể sử dụng sau khi chèn đoạn này
    // ob_start();  //Sử dụng được hàm header();
    if(!isset($_COOKIE['userId'])){
        header('Location:../user/sign_in.php');
       
    }
    else{
        $user_id = $_COOKIE['userId'];
        if(isset($_GET['add_cart'])){
            $id= $_GET['add_cart'];
            $amount = $_GET['amount'];
            if($amount <=0){
                header('Location:./add_cart.php?error=1');
                exit();
            }
            $check_in_cart = mysqli_query($connect,"SELECT * FROM cart WHERE product_id = '$id' AND user_id = '$user_id'");// ktra xem giỏ hàng có sp đang xem hay ko
            $product_in_cart = mysqli_fetch_array($check_in_cart);// cho sp nếu có trong giỏ hàng vào mảng
            
            if($product_in_cart){
                $amount_in_cart = $product_in_cart['amount'];// sl sp trong giỏ hàng hiện có
                $amount+= $amount_in_cart;
                // echo $amount_in_cart;
                $replace = mysqli_query($connect,"UPDATE cart SET amount = $amount WHERE product_id = '$id'");
                if($replace){
                    // echo "ok";
                }
                else{
                    echo "no";
                }
            }
            else{
                $result = mysqli_query($connect,"SELECT * FROM products WHERE id = '$id'");
                $row = mysqli_fetch_array($result);
                // $price = $row['price'];
                $totalMoney = $row['price']*$amount;
                // $_SESSION['id'] = $id;
                // $_SESSION['amount'] = $amount;

                $insert = mysqli_query($connect,"INSERT INTO cart(product_id,amount,totalMoney,user_id,dateModified) VALUES(
                    '$id','$amount','$totalMoney','$user_id',NOW()
                )");
            }
         }
        if(isset($_GET['edit_amount'])){
            $id= $_GET['edit_amount'];
            $amount = $_GET['amount'];
            if($amount <=0){
                header('Location:./add_cart.php?error=1');
                exit();
            }
            $check_in_cart = mysqli_query($connect,"SELECT * FROM cart WHERE product_id = '$id' AND user_id = '$user_id'");// ktra xem giỏ hàng có sp đang xem hay ko
            $product_in_cart = mysqli_fetch_array($check_in_cart);// cho sp nếu có trong giỏ hàng vào mảng
            
            if($product_in_cart){
                $amount_in_cart = $product_in_cart['amount'];// sl sp trong giỏ hàng hiện có
                // echo $amount_in_cart;
                $replace = mysqli_query($connect,"UPDATE cart SET amount = $amount WHERE product_id = '$id'");
                if($replace){
                    // echo "ok";
                }
                else{
                    echo "no";
                }
            }
        }
         if(isset($_POST['delete_in_cart'])){
           

            $id_product_delete = $_POST['delete_in_cart'];//lấy id của sp xóa có trong giỏ hàng
            
            $delete = mysqli_query($connect,"DELETE FROM cart WHERE product_id = '$id_product_delete' AND user_id = '$user_id'");// xóa trong database
           
         }
         if(isset($_POST['delete_all_cart'])){
            $delete_all = mysqli_query($connect,"DELETE FROM cart WHERE user_id = '$user_id'");// xóa tất cả sp trong giỏ hàng của user đang đăng nhập
         }
    }
?>