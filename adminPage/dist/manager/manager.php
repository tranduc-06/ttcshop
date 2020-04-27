<?php
    include('./includes/data.php');
    $product = mysqli_query($connect, "SELECT * FROM products");
    $total_product=0;// tính tổng mặt hàng
    while ($product_arr =  mysqli_fetch_array($product)) {
        $total_product += $product_arr['quantityInStock'];
    }
    // tính tổng số tiền đơn hàng p/s: còn chỉnh sửa
    $order = mysqli_query($connect, "SELECT * FROM orderdetails");
    $total_Money=0;
    while ($order_arr =  mysqli_fetch_array($order)) {
        $total_Money+= $order_arr['totalMoney'];
    }
?>