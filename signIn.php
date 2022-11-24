<?php 
    include 'config/config.php';
    // global $conn;
        // if(isset($_POST['signin'])){
        //      $email      =$_POST['email'];
        // $password   =$_POST['password1'];
        // $sql ="SELECT * FROM `user` WHERE `email` ='$email' and `password`='$password' ";
        // $result=mysqli_query($conn,$sql);var_dump($result);
        // if(!empty($email) || !empty($password) ){
        //     if($result){
        //         if( mysqli_num_rows($result)>0){
        //             $row=mysqli_fetch_assoc($result);
        //             $pass_verify=password_verify($password,$row);
        //             var_dump($pass_verify);
        //             if($pass_verify){
        //                 $_SESSION['id']=$row['id'];
        //                 $_SESSION['email']=$row['email'];
        //                 $_SESSION['name']=$row['name'];
        //                 header('location:index.php');
        //             }else{
        //                     echo 'password error';
        //             }
        //         }else echo 'not found';
        //     }
        // } else{
        //     echo " salut";
        // }
        // }
            if(isset($_POST['signin'])){
                $email=$_POST['email'];
                $password=$_POST['password1'];
                $sql="select *from user where email='$email' ";
                
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_assoc($result);
                var_dump($row);
                $passv=password_verify($password,$row['password']);
                var_dump($passv);
                if(is_array($row)){
                     $_SESSION['name']=$row['name'];
                        // var_dump($row['name']);
                     }


        }











       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/0abe3e5cf3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/styli.css">
</head>
<body class="bg">
   <div class="div d-flex justify-content-center align-content-center pt-5 ">
    <div class="img col-lg-4  col-sm-12 ">
    <div class="container col-lg-12  mt-5 pb-4  ">
        <form method="POST"id="form" class="col-lg-10 col-md-10 col-sm-12 mx-auto rounded-pill h-50">
            <h1 class="fst-italic fs-4 text-center "> Sign In</h1>
            <div class="form-group has-success ">
                <label class="form-label mt-4" for="inputDefault">Email</label>
                <input type="text"  class="form-control " id="email" name="email">
            </div>
            <div class="form-group has-success ">
                <label class="form-label mt-4" for="inputDefault">Password</label>
                <input type="password"  class="form-control " id="password1"  name="password1">
            </div>
            <div class="d-flex justify-content-end mt-1">
              <span class="me-5">Dont's have an account ?</span>
            <a href="registration.php" class="link-danger">Sign up</a>
            </div>

            <button type='submit'  name='signin' class=" btn btn-primary w-100 mt-4"  >Sign In</button>
            <button type="button" class=" d-none btn btn-primary w-100 mt-4 mb-5"  >Sign In</button> 
        </div>
    </form>
         </div>   
    </div>        
    </div>
 <script src="assets/js/script.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>