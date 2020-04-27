<?php
include('../includes/data.php');
// xử lý form ở đây -> tự viết :D
    $email = $passwordConfirmation =$password="";
    if(isset($_POST['signUp'])){
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $passwordConfirmation = trim($_POST['passwordConfirmation']);
        $isPassed = true;
        if(trim($email) == ''){
            echo "Nhập vào email<br>";
            $isPassed = false;
        }
        if(trim($password) == ''){
            echo "Nhập vào MK<br>";
            $isPassed = false;
        }
        if(trim($passwordConfirmation) == ''){
            echo "Nhập vào lại MK<br>";
            $isPassed = false;
        }

        else{
            if($password!= $passwordConfirmation){
                echo "xác nhận mk ko chính xác";
                $isPassed = false;
            }
        }

        if($isPassed){
           // search exist email
            $result = mysqli_query($connect,"
                SELECT email FROM users WHERE email = '$email'
            ");
            $num = mysqli_num_rows($result);
            if($num >0){
                echo "Email này đã tồn tại";
            }
            else{
                 $result = mysqli_query($connect,"INSERT INTO users(email,password,authorization,dateModified) VALUES('$email','$password','1',NOW())");
                if($result){
                    echo "Đăng kí thành công <br>"."<a href = '../index.php'>quay lại</a>";
                }
                else{
                    echo "lỗi";
                }
            }
            
        }
        mysqli_close($connect);
    }
 ?>
 