<div class=" bg-light ">

    <div class="container mt-5">

        <div class="row ">
            <div class="col-md-8 order-md-2 mb-4" >
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <!-- <span class="badge badge-secondary badge-pill">3</span> -->
                </h4>
                <ul class="list-group mb-3">
<?php
    include('../includes/data.php');
    $totalProduct = mysqli_query($connect,"SELECT * FROM cart WHERE user_id = '$user_id'");//get all products in cart
    $num = mysqli_num_rows($totalProduct);
    $sumOfProduct =0;
    $sumOfMoney =0;
    for ($j = 1; $j <= $num; $j++) {
        $arrProducts[$j] =  mysqli_fetch_array($totalProduct);// push into array
        $amountPro = $arrProducts[$j][2];// get amount of products in category
        $totalMoneyPro = $arrProducts[$j][3]; // get total money of product in category
        $id_product = $arrProducts[$j][1];// get id of product to query
        $product = mysqli_query($connect,"SELECT * FROM products WHERE id = '$id_product'");
        $row_pro = mysqli_fetch_array($product);
        $sumOfMoney +=$totalMoneyPro;// tổng tiền tất cả sp có trong giỏ hàng
        $sumOfProduct += $amountPro;// tổng sp có trong giỏ hàng
        // echo $row_pro[2];
                
                        echo'<li class="list-group-item d-flex justify-content-between lh-condensed">
                        
                            <div>
                                <h6 class="my-0">'. $row_pro['name'].'</h6>
                                <small class="text-muted">'.$row_pro['brief description'].'</small>
                            </div>
                            <span class="text-muted"style="width: 100%;
                            height: 100%"><img src="'."../images/". $row_pro['image'].'" style="width:100%; height=100%"></span>
                            <div>
                                <h6 class="my-0">'.$row_pro['price'].'x</h6>
                            </div>
                            <div>
                                <h6 class="my-0">'.$amountPro.'</h6>
                            </div>
                            <div>
                                <h6 class="my-0">='.$totalMoneyPro.'đ</h6>
                            </div>
                            
                            
                        </li>
                        <div class="input-group"class="card p-2">
                            <form action="./edit_cart.php" method="GET" >
                                <button type="submit" name = "edit_cart" value = "'.$row_pro['id'].'"class="btn btn-secondary" style="background-color: #28a745; margin-right:5px">Sửa</button>
                            </form>
                            <form action="cart.php" method="POST" >
                                <button type="submit" name = "delete_in_cart" value = "'.$row_pro['id'].'"class="btn btn-secondary" style="background-color: red; margin-right:5px";>Xóa</button>
                            </form>
                        </div>
                        ';
    }
    echo'<li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
                <h6 class="my-0">Tổng sản phẩm: </h6>
            </div>
            <div>
                 <h6 class="my-0">'.$sumOfProduct.' </h6>
            </div>
            <div>
                  <h6 class="my-0"> Tổng số tiền:  </h6>
            </div> 
            <div>
                  <h6 class="my-0">'.$sumOfMoney.' đ</h6>
            </div>     
        </li>';
    if($num >0){
        echo'
        </ul>
            <div class="input-group"class="card p-2">
                <form action="cart.php" method="POST" >
                    <button type="submit" name = "delete_all_cart" value="'.$user_id.'" class="btn btn-secondary" style="background-color: red; margin-right:5px";>Xóa giỏ hàng</button>
                
                </form>
                <a href="../index.php" class="btn btn-secondary" style="background-color: #17a2b8; margin-right:5px";>Thêm sản phẩm</a>
                <a  href="../order/infor_customer.php" style="background-color: #007bff"class="btn btn-secondary">Thanh toán</a>
                     
            </div>
    </div>
        ';
    }
    else{
        echo '
        </ul>
            <div class="input-group"class="card p-2">
                <a href="../index.php" class="btn btn-secondary" style="background-color: #17a2b8; margin-right:5px";>Thêm sản phẩm</a>
            </div>
        </div>
        ';
    }
  
?>

            </div>
        </div>
    </div>
</div>