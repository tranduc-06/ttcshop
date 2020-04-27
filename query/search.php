<?php
    require('../includes/data.php');
    if(isset($_POST['search'])){
        $searchtxt = $_POST['searchtext'];
        if($searchtxt== ''){
            header("Location:./notFound.php");
            exit();
        }
        else{
            $result = mysqli_query($connect,"
            SELECT * FROM products WHERE  name LIKE '%$searchtxt%'
                OR category LIKE '%$searchtxt%';
                 ");
            if($result){
                include('../includes/head.php');     
                $num = mysqli_num_rows($result);
                echo '<div class=" container mt-2 " id="content">';
                echo '<div class="content-card d-flex justify-content-between flex-wrap">';
                if($num >0 && $num <10){
                    for ($j = 1; $j <= $num; $j++) {
                        // $result = mysqli_query($connect, "SELECT * FROM products WHERE id=$i");
                    
                        $row[$j] =  mysqli_fetch_array($result);
                    
                        echo
                            '<div class="card mb-3 mr-ml-1" style="width: 270px;">
                                <img src="../images/'.$row[$j][5].'" class="card-img-top" alt="...">
                                <div class="card-body">
                                        <h5 class="card-title">' . $row[$j][1] . '</h5>' .
                                '<h5 class="price text-danger">' . $row[$j][2] . '</h5>' .
                                '<p class="card-text">' . $row[$j][3] . ' </p>
                                        <form action="../phone/add_cart.php" method="GET">
                                            <button type="submit" name="buynow" value = "'.$j.'" class="btn btn-primary" data-toggle="collapse">Buy now</button>
                                        </form>
                                    </div>
                                    <div class="collapse multi-collapse " id="desphone' . $j . '">
                                        <div class="card card-body bg-primary text-light">' . $row[$j][4] . ' </div>
                                            
                                    </div>
                                </div>';
                               
                    }
                    echo '</div></div>';
                }
                else{
                    header("Location:./notFound.php");
                    exit();
                 }
            }

         }
    }
    
    
   


?>
