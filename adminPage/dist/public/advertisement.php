<?php
include('../includes/header.php');
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Quảng cáo</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Advertisement</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">Các hình ảnh dưới đây sẽ hiển thị trên trang web</div>
            </div>
            <div class="card mb-4">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Header ads</div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="row ml-2">
                                    <th class="col-1">ID</th>
                                    <th class="col-md-3">Link</th>
                                    <th class="col-md-5">Image</th>
                                    <!-- <th> <button type="button " class="d-flex flex-row btn btn-success btn-rounded btn-sm "><i class="fas fa-plus-circle"></i>&nbsp;Add</button></th> -->
                                    <th class="col-md-1"> <button type="button" class="d-flex flex-row btn btn-success btn-rounded btn-sm " data-toggle="modal" data-target="#btn-add"><i class="fas fa-plus-square mt-1"></i>&nbsp;&nbsp;Add&nbsp;&nbsp;</button></th>

                                </tr>
                            </thead>
                           
                            <tbody>
                               <?php
                                // làm thêm bảng hình ảnh quảng cáo trong db để load hình ảnh
                               
                               ?>
                                            
                                        

                               
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