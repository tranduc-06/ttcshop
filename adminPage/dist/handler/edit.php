<?php
include('../includes/data.php');
    if(isset($_GET['edit'])){
       
       $id_edit = $_GET['edit'];
      
       $result_edit = mysqli_query($connect,"SELECT * FROM products WHERE id = '$id_edit'");
      
       $edit_arr = mysqli_fetch_array($result_edit);
    }

        if(isset($_POST['change'])){
        $code = $phonename = $category = $price = $br = $description =$quantity='';
        $code = $_POST['code_edit'];
        $phonename = $_POST['name_edit'];
        $category = $_POST['category_edit'];
        $price = $_POST['price_edit'];
        $br = $_POST['brief_edit'];
        $description = $_POST['description_edit'];
        $quantity = $_POST['quantity_edit'];
        $file = $_FILES['file'];
        $fileNameDb = $_FILES['file']['name'];
        $fileName = '../../../images/'.$_FILES['file']['name'];
        if($phonename == '' || $category == ''||$price ==''|| $brief =''||$description==''||$quantity==''){
            echo '<script language="javascript">';
            echo 'alert("Chú ý! Không được để trống")';
            echo '</script>';
        }
        else{
            if($phonename!= $edit_arr[1]){
                $edit_name = mysqli_query($connect,"UPDATE `products` SET `name` = '$phonename' WHERE `products`.`id` = $edit_arr[0];");
            }
            if($code!= $edit_arr[9]){
                $edit_code = mysqli_query($connect,"UPDATE `products` SET `productCode` = '$code' WHERE `products`.`id` = $edit_arr[0];");
            }
            if($category!= $edit_arr[7]){
                $edit_category = mysqli_query($connect,"UPDATE `products` SET `category` = '$category' WHERE `products`.`id` = $edit_arr[0];");
            }
            if($price!= $edit_arr[2]){
                $edit_price = mysqli_query($connect,"UPDATE `products` SET `price` = '$price' WHERE `products`.`id` = $edit_arr[0];");
            }
            if($br!= $edit_arr[3]){
                $edit_br = mysqli_query($connect,"UPDATE `products` SET `brief description` = '$br' WHERE `products`.`id` = $edit_arr[0];");
            }
            if($description!= $edit_arr[4]){
                $edit_des = mysqli_query($connect,"UPDATE `products` SET `description` = '$description' WHERE `products`.`id` = $edit_arr[0];");
            }
            if($quantity!= $edit_arr[8]){
                $edit_quantity = mysqli_query($connect,"UPDATE `products` SET `quantityInStock` = '$quantity' WHERE `products`.`id` = $edit_arr[0];");
            }
            if($_FILES['file']['name']!=''){
                if( move_uploaded_file($file['tmp_name'],$fileName)){
                    // echo "ĐK thành công";
                    $edit_img = mysqli_query($connect,"UPDATE `products` SET `image` = '$fileNameDb' WHERE `products`.`id` = $edit_arr[0];");
                   
                }
                else{
                    echo '<script language="javascript">';
                    echo 'alert("Không thành công")';
                    echo '</script>';
                    header('Location:edit.php?edit=$edit_arr[0]');
                }
            }
            header('Location:../public/tables.php');
        }
}

    include('../includes/header.php');
?>

</div>
    <!-- Modal -->
    <!-- <div  class="modal fade"id ="btn-edit"tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">  -->
        <div class="modal-dialog modal-dialog-centered" role="document" style="margin-top: 10%;" >
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title " id="exampleModalLongTitle">Sửa thông tin sản phẩm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
               
                    <form action="edit.php?<?php echo 'edit='.$edit_arr[0]?>" method="POST" enctype="multipart/form-data" class="bg-light p-3">
                    <div class="form-group col-md-8">
                            <label class="col-form-label">Mã sản phẩm</label>
                            <input type="text" class="form-control" id="smartphoneName" name = "code_edit" value="<?php echo $edit_arr[9]?>">
                        </div>
                        <div class="form-group col-md-8">
                            <label class="col-form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="smartphoneName" name = "name_edit" value="<?php echo $edit_arr[1]?>">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="recipient-name" class="col-form-label">Hãng sản phẩm</label>
                            <input type="text" class="form-control" id="category" name = "category_edit"value="<?php echo $edit_arr[7]?>">
                        </div>
                        <div class="form-group col-md-8">
                                <label for="smartphoneName" class="col-form-label">Giá sản phẩm</label>
                                <input type="int" class="form-control" id="phonePrice"name = "price_edit" value="<?php echo $edit_arr[2]?>">
                        </div>
                        <div class="form-group col-md-8">
                            <label class="col-form-label">Giới thiệu sản phẩm</label>
                            <input type="text" class="form-control" id="briefDescription" name = "brief_edit" value="<?php echo $edit_arr[3]?>">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="smartphoneName" class="col-form-label">Chi tiết sản phẩm</label>
                            <textarea><span type="text" class="form-control" id="description" name = "description_edit" value="<?php echo $edit_arr[4]?>"></span></textarea>
                        </div>
                        <div class="form-group col-md-8">
                            <label  class="col-form-label ">Số lượng trong kho</label>
                            <input type="int" class="form-control" id="quantityInStock" name= "quantity_edit" value="<?php echo $edit_arr[8]?>">
                        </div>
                        
                        <!-- Select image to upload: -->
                        <input type="file" name="file" id="fileToUpload">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                           
                                <input type="submit" value="lưu thay đổi" name="change" class="btn btn-primary">
                           
                        </div>
                    </form>
                
                </div>
                
            </div>
        </div>