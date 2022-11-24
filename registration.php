<!-- @include 'config.php';
if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($_conn,$_POST['name']);
    $email=mysqli_real_escape_string($_conn,$_POST['email']);
    $password1=md5($_POST['password1']);
    $password2=md5($_POST['password2']);
} -->

<?php
    include 'config/config.php';
    session_start();
    if(isset($_POST['register'])){
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $password1=$_POST['password1'];
        $hashed_password1=password_hash($password1,PASSWORD_BCRYPT);
        $password2=$_POST['password2'];
        $hashed_password2=password_hash($password2,PASSWORD_BCRYPT);
        
        $sql="select * from user where email='$email' && password='$hashed_password1'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $error[]='user already exist !! ';
        }else{
            if($password1!=$password2){
                $error[]='password not matched';
            }else{
                $insertQuery= "INSERT INTO `user`( `name`, `email`, `password`) VALUES ('$name','$email','$hashed_password1')";
                mysqli_query($conn,$insertQuery);
                
                header('location:signin.php');
            }
        }
    };





?>
<!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styli.css">
    

   </head>
<body class="bg">
    <div class="div d-flex justify-content-center align-content-center pt-5 ">
        <div class="img col-lg-4  col-sm-12 ">
        <div class="container col-lg-12  mt-5 pb-4  ">     
        <div class="container">
        <form id="form"  method="Post"  action="" class="col-lg-10 col-md-10 col-sm-12 mx-auto rounded-pill h-50">
            <h1 class="fst-italic fs-4 text-center ">Registration</h1>
            <div class="form-group has-success ">
            <label class="form-label mt-4" for="inputDefault">Username</label>
                <input  id="name" name="name" type="text" class='form-control' placeholder="enter your name" onkeyup="validName()">
                <span id="name-error"  ></span>
            </div>
            <div class="form-group has-success ">
            <label class="form-label mt-4" for="inputDefault">Email</label>
                <input id="email" name="email" type="text" class='form-control' placeholder="enter your email" onkeyup="validEmail()">
                <span id="email-error"></span>
            </div>
            <div class="form-group has-success ">
            <label class="form-label mt-4" for="inputDefault">Password</label>
                <input id="password1"name="password1" type="password"  class='form-control' placeholder="enter your password" onkeyup="validPassword1()">
                <span id="password1-error"></span>
            </div>
            <div class="form-group has-success ">
            <label class="form-label mt-4" for="inputDefault">Confirme your password </label>
                <input id="password2"name="password2" type="password" class='form-control'  placeholder="confirm your password" onkeyup="validPassword2()">
                <span id="password2-error"></span>
            </div>
            <button type='submit' id='register' name='register' class=" btn btn-primary w-100 mt-4" onclick= validateForm()  >Sign Up</button>
            <!-- <button type="button" class="btn btn-primary w-100 mt-4 mb-5"  >Sign Up</button> -->
            <div class="d-flex justify-content-end mt-2">
              <span class="me-1">Already have an account?</span>
            <a href="signin.php" class="link-danger">Sign in</a>
            </div>
        </form>
    </div>
    
            
 <script src="assets/js/script.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>