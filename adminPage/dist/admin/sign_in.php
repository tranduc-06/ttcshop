<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title>Dashboard - TTC Admin</title>
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>
<?php
       
    // xử lý form ở đây -> tự viết :D
    require('../includes/data.php');
    $email =$password="";
    if(isset($_POST['signIn'])){     
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $isPassed = true;
        if(trim($email) == ''){
            $isPassed = false;
        }
        if(trim($password) == ''){
            $isPassed = false;
        }
        if($isPassed){
           // search exist email
            $result = mysqli_query($connect,"
                SELECT * FROM users WHERE email = '$email' AND password = '$password' AND authorization='0';
            ");
            $num = mysqli_num_rows($result);
            if($num >0){
                // echo "ĐN thành công";
                // ghi nhớ ĐN, 
                $row = mysqli_fetch_array($result);
                // set cookie
                setcookie('userId', $row['id'], time() + 3600, '/', '', 0);
                header('Location:../index.php'); 
                exit();
                
              
            }
            else{
            //    echo "ko thành công";
            echo '<script language="javascript">';
            echo 'alert("Đăng nhập không thành công!")';
            echo '</script>';
            }
        }
        else{
            echo '<script language="javascript">';
            echo 'alert("Đăng nhập không thành công!")';
            echo '</script>';
        }
        mysqli_close($connect);
    }
?>

<div class="container col-5" style="margin-top: 15%; margin-left:30%">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class="bg-light p-3">
        <h3>Đăng nhập</h3>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Nhập vào email" id="email">
        </div>

        <div class="form-group">
            <label for="pwd">Mật khẩu:</label>
            <input type="password" name="password" class="form-control" placeholder="Nhập vào mật khẩu" id="pwd">
        </div>
        <button type="submit" name="signIn" class="btn btn-primary">Đăng nhập</button>
    </form>
</div>
