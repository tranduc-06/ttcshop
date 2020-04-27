<?php
include('../includes/header.php');

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Sản phẩm</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="../index.php">Trang chủ</a></li>
                <li class="breadcrumb-item active">Sản phẩm</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">Các hình ảnh quảng cáo dưới đây sẽ hiển thị trên trang web</div>
            </div>
            <div class="card mb-4">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Chi tiết mặt hàng</div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                <th> <button type="button" class="d-flex flex-row btn btn-success btn-rounded btn-sm " data-toggle="modal" data-target="#btn-add"><i class="fas fa-plus-square mr-2 mt-1"></i>Thêm&nbsp;&nbsp;</button></th>
                                    <th>STT</th>
                                    
                                    <th>Tên sản phẩm</th>
                                    <th>Giá sản phẩm</th>
                                    <th>Giới thiệu</th>
                                    <th>Chi tiết</th>
                                    <th>Số lượng</th>
                                    <th>Hình ảnh</th>
                                    <!-- <th>Hình ảnh</th>
                                    <th>abc</th> -->
                                    <!-- <th> <button type="button " class="d-flex flex-row btn btn-success btn-rounded btn-sm "><i class="fas fa-plus-circle"></i>&nbsp;Add</button></th> -->
                                    

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                     <th>Sửa</th>
                                    <th>STT</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá sản phẩm</th>
                                    <th>Giới thiệu</th>
                                    <th>Chi tiết</th>
                                    <th>Số lượng</th>
                                    <th>Hình ảnh</th>
                                    
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php

                                // $row[10] = null;
                                $result = mysqli_query($connect, "SELECT * FROM products");
                                 $i=1;
                                while ($row =  mysqli_fetch_array($result)) {

                                    echo
                                        '<tr>
                                        <td >
                                            <form action ="../handler/edit.php" method="GET">
                                                <button type="submit" class="btn btn-info btn-rounded btn-sm my-0 mb-2"name="edit" data-toggle="modal"data-target="#btn-edit" 
                                                value = "'.$row[0].'" class="btn btn-primary" data-toggle="collapse"></i>&nbsp;Sửa&nbsp&nbsp;&nbsp; </button>
                                            </form>
                                            <form action="'.$_SERVER['PHP_SELF'] .'" method="GET">
                                                <button type="submit" class="btn btn-danger btn-rounded btn-sm my-0"name="delete" data-toggle="modal"
                                                value = "'.$row[0].'" class="btn btn-primary" data-toggle="collapse"></i>&nbsp;Xóa&nbsp&nbsp;&nbsp; </button>
                                            </form>
                                            
                                        </td>
                                        <td>' . $i . '</td>
                                        <td>' . $row[1] . '</td>
                                        <td>' . $row[2] . '</td>
                                        <td>' . $row[3] . '</td>
                                        <td><pre>' . $row[4] . '</pre></td>

                                        <td>' . $row[8] . '</td>
                                        <td><pre>' . $row[5] . '</pre></td>
                                        <td>
                                         <img src="../../../images/' . $row[5] . '"></td>
                                    </tr>';
                                    $i++;
                                }
                             include('../handler/add_product.php'); 
                             include('../handler/delete.php');    
                            //   include('../handler/edit.php');                
                        ?>
                                <!-- lồng vòng for của php vào để duyệt database -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
 
    include('../includes/footer.php');
    ?>