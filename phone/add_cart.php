<?php
setcookie('currentPage', '../phone/add_cart.php', time() + 3600, '/', '', 0);
include('../includes/data.php');
include('../includes/head.php');


if (isset($_COOKIE['userId'])) {
    if (isset($_GET['buynow'])) {
        $id = $_GET['buynow'];
        $result = mysqli_query($connect, "SELECT * FROM products WHERE id = '$id'");
        $row = mysqli_fetch_array($result);
        $link = "../images/" . $row['image'];

        $amount = 0;
    }
} else {
    if (isset($_GET['buynow'])) {
        $id = $_GET['buynow'];
        $result = mysqli_query($connect, "SELECT * FROM products WHERE id = '$id'");
        $row = mysqli_fetch_array($result);
        $link = "../images/" . $row['image'];
        $num_of_product = 0; // số lượng của sp có $id trong giỏ hàng

        $amount = 0;
    }
}
?>
<div class="error">
    <?php
    if (isset($_GET['error']) == true) {
        echo "
            <div class='alert alert-danger' style='margin-top: 3px'>
                 <strong>Không thành công! </strong>Vui lòng chọn số lượng
            </div>
        ";
        exit();
    }
    ?>



    <html>

    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                                <div class="tab-pane active" id="pic-1"> <img src="../images/<?php echo $row['image'] ?>" /></div>
                                <div class="tab-pane" id="pic-2"><img src="../images/<?php echo $row['image'] ?>" /></div>
                                <div class="tab-pane" id="pic-3"><img src="../images/<?php echo $row['image'] ?>" /></div>
                                <div class="tab-pane" id="pic-4"><img src="../images/<?php echo $row['image'] ?>" /></div>
                                <div class="tab-pane" id="pic-5"><img src="../images/<?php echo $row['image'] ?>" /></div>
                            </div>
                            <ul class="preview-thumbnail nav nav-tabs">
                                <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="../images/<?php echo $row['image'] ?>" /></a></li>
                                <li><a data-target="#pic-2" data-toggle="tab"><img src="../images/<?php echo $row['image'] ?>" /></a></li>
                                <li><a data-target="#pic-3" data-toggle="tab"><img src="../images/<?php echo $row['image'] ?>" /></a></li>
                                <li><a data-target="#pic-4" data-toggle="tab"><img src="../images/<?php echo $row['image'] ?>" /></a></li>
                                <li><a data-target="#pic-5" data-toggle="tab"><img src="../images/<?php echo $row['image'] ?>" /></a></li>
                            </ul>
                        </div>
                        <div class="details col-md-6">
                            <h3 class="product-title"><?php echo $row['name'] ?></h3>
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
                            <p class="product-description"><?php echo $row['brief description'] ?></p>
                            <h4 class="price">Giá: <span><?php echo $row['price'] ?> &nbsp;đ</span></h4>
                            <p class="vote"><strong>91%</strong> người mua hài lòng về sản phẩm! <strong>(87 votes)</strong></p>

                            <div class="action">
                                <form action="./cart.php" method="GET">
                                    <input type="number" name="amount" value="<?php echo $amount ?>" style="width:100px;height:30px;border:none; margin-right:10px;text-align: center;background-color:#ff9f1a;">

                                    <button type="submit" name="add_cart" value="<?php echo $id ?>" class="add-to-cart btn btn-default">Thêm vào giỏ hàng</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="product-description">
                    <pre><?php echo $row['description'] ?></pre>
                </p>
            </div>
            <?php echo $row['description'] ?>
        </div>
    </body>

    </html>