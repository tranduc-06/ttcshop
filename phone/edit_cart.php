<?php
 setcookie('currentPage', '../phone/edit_cart.php', time() + 3600, '/', '', 0);
    include('../includes/data.php');
    include('../includes/head.php');
    if(!isset($_COOKIE['userId'])){
        header('Location:../user/sign_in.php');
       
    }
    
        if(isset($_COOKIE['userId'])){
            $user_id = $_COOKIE['userId'];
            if(isset($_GET['edit_cart'])){
                $id= $_GET['edit_cart'];
                $result = mysqli_query($connect,"SELECT * FROM products WHERE id = '$id'");
                $row = mysqli_fetch_array($result);
                $link = "../images/".$row['image'];
                $num_of_product = mysqli_query($connect,"SELECT amount FROM cart WHERE product_id = '$id' AND user_id = '$user_id'");// số lượng của sp có $id trong giỏ hàng
                // // echo $link;
                $amount_of_product = mysqli_fetch_array($num_of_product);
                $amount = 0;
                // echo $amount_of_product['amount'];
                if($amount_of_product){
                    $amount = $amount_of_product['amount'];
                    // $replace = mysqli_query($connect,"UPDATE cart SET amount = $amount WHERE product_id = '$id'");
                }
            
        }
    }
        else{
           header('Location:../user/sign_in.php');
        }
       
        
    
?>
<div class= "error">
    <?php
        if(isset($_GET['error'])== true){
            echo "
            <div class='alert alert-danger' style='margin-top: 3px'>
                 <strong>Không thành công! </strong>Vui lòng chọn số lượng
            </div>
        ";
            exit();
        }
    ?> 
</div>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>eCommerce Product Detail</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="../CSS/demo.css" rel="stylesheet">
  </head>

  <body>
	
	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"> <img src="../images/<?php echo $row['image']?>"/></div>
						  <div class="tab-pane" id="pic-2"><img src="../images/<?php echo $row['image']?>" /></div>
						  <div class="tab-pane" id="pic-3"><img src="../images/<?php echo $row['image']?>" /></div>
						  <div class="tab-pane" id="pic-4"><img src="../images/<?php echo $row['image']?>" /></div>
						  <div class="tab-pane" id="pic-5"><img src="../images/<?php echo $row['image']?>" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="../images/<?php echo $row['image']?>"/></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="../images/<?php echo $row['image']?>" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="../images/<?php echo $row['image']?>" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="../images/<?php echo $row['image']?>" /></a></li>
                          <li><a data-target="#pic-5" data-toggle="tab"><img src="../images/<?php echo $row['image']?>"/></a></li>
                          <!-- <div id="carouselExampleControls" class="carousel slide mt-5 ml-3" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="../images/phone1.jpeg" alt="First slide">
                                
                                </div>
                                <div class="carousel-item">
                                <img src="../images/phone1.jpeg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                <img src="../images/phone1.jpeg" alt="First slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            </div> -->
						</ul>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title"><?php echo $row['name']?></h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description"><?php echo $row['brief description']?></p>
						<h4 class="price">Giá: <span><?php echo $row['price']?>đ</span></h4>
						<p class="vote"><strong>91%</strong> người mua hài lòng về sản phẩm! <strong>(87 votes)</strong></p>
					
						<div class="action">
                            <form action="./cart.php" method="GET">
                                <input type="number" name ="amount" value = "<?php echo $amount?>" style="width:100px;height:30px;border:none; margin-right:10px;text-align: center;background-color:#ff9f1a;" >
                                <!-- <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> -->
                                <!-- <button class="add-to-cart btn btn-default" type="button">add to cart</button> -->
                                <button type="submit" name="edit_amount" value = "<?php echo $id?>" class="add-to-cart btn btn-default">Thêm vào giỏ hàng</button>
                            </form>	
						</div>
					</div>
				</div>
            </div>
            <p class="product-description"><pre><?php echo $row['description']?></pre></p>
        </div>
        <!-- <p class="product-description"><pre><?php echo $row['description']?></pre></p> -->
	</div>
  </body>
</html>
