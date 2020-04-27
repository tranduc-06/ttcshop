<?php
include('../includes/data.php');
        if(isset($_POST['submit'])){
            $code = $phonename = $category = $price = $br = $description =$quantity='';
            $code = $_POST['phonecode'];
            $phonename = $_POST['phonename'];
            $category = $_POST['phonecategory'];
            $price = $_POST['price'];
            $br = $_POST['brief'];
            $description = $_POST['description'];
            $quantity = $_POST['quantity'];
            $file = $_FILES['file'];
            $fileNameDb = $_FILES['file']['name'];
            $fileName = '../../../images/'.$_FILES['file']['name'];
            if($code ==''||$phonename == '' || $category == ''||$price ==''|| $brief =''||$description==''||$quantity==''){
                echo '<script language="javascript">';
                echo 'alert("Chú ý: Không được để trống!")';
                echo '</script>';
            }
            else{
                if( move_uploaded_file($file['tmp_name'],$fileName)){
                    $result = mysqli_query($connect,"INSERT INTO `products`(`productCode`, `name`, `price`, `brief description`,
                     `description`, `image`, `dateModified`, `category`, `quantityInStock`)
                     VALUES ('$code','$phonename','$price','$br','$description','$fileNameDb',NOW(),'$category','$quantity')");
                     echo '<script language="javascript">';
                     echo 'alert("Thành công")';
                     echo '</script>';
                }
                else{
                    echo '<script language="javascript">';
                    echo 'alert("Không thành công!")';
                    echo '</script>';
                }
            }
         
    }
    
    
    ?>

    <!-- Modal -->
    <div class="modal fade" id="btn-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title " id="exampleModalLongTitle">Sản phẩm mới</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <form action="tables.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group col-md-8">
                                <label class="col-form-label">Mã sản phẩm</label>
                                <input type="text" class="form-control" id="phonecode" name = "phonecode">
                        </div>
                        <div class="form-group col-md-8">
                            <label class="col-form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="smartphoneName" name = "phonename">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="recipient-name" class="col-form-label">Hãng sản phẩm</label>
                            <input type="text" class="form-control" id="category" name = "phonecategory">
                        </div>
                        <div class="form-group col-md-8">
                                <label for="smartphoneName" class="col-form-label">Giá sản phẩm</label>
                                <input type="int" class="form-control" id="phonePrice"name = "price">
                        </div>
                        <div class="form-group col-md-8">
                            <label class="col-form-label">Giới thiệu sản phẩm</label>
                            <textarea type="text" class="form-control" id="briefDescription" name = "brief"></textarea>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="smartphoneName" class="col-form-label">Chi tiết sản phẩm</label>
                            <textarea type="text" class="form-control" id="description" name = "description"></textarea>
                        </div>
                        <div class="form-group col-md-8">
                            <label  class="col-form-label ">Số lượng trong kho</label>
                            <input type="int" class="form-control" id="quantityInStock" name= "quantity">
                        </div>
                        
                        <!-- Select image to upload: -->
                        <input type="file" name="file" id="fileToUpload">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <input type="submit" value="Lưu thay đổi"class="btn btn-primary" name="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
