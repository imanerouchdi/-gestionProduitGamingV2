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
            // header(location:)
        }else{
            if($password1!=$password2){
                $error[]='password not matched';
            }else{
                $insertQuery= "INSERT INTO `user`( `name`, `email`, `password`) VALUES ('$name','$email','$hashed_password1')";
                mysqli_query($conn,$insertQuery);
                header('location:index.php');
            }
        }
    };
// session_destroy();




?>
<!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    

   </head>
<body>
      
        <!--<div class="container-fluid">
            <div class="card">
                <div class="card_logo"></div>
                    <div class="card_title">Registration</div>
                        <form method="post" class="card_form" id="form">
                            <div class="fields">
                                <div class="username input-group">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="user" width="1.5em" height="1.5em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><rect x="0" y="0" width="30" height="30" fill="none" stroke="none" /><path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4Z"/></svg>
                                    <input  id="name" name="name" type="text" class='form-control' placeholder="enter your name" onkeyup="validName()">
                                    <span id="name-error"  ></span>
                                </div>
                                <div class="email input-group">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"viewBox="0 0 24 24"fill="none"stroke="currentColor" stroke-width="2" stroke-linecap="round"stroke-linejoin="round"class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                        <polyline points="22,6 12,13 2,6"></polyline></svg>
                                        
                                        <input id="email" name="email" type="text" class='form-control' placeholder="enter your email" onkeyup="validEmail()">
                                        <span id="email-error"></span>
                                </div>
                                <div class="password1 input-group">
                                <svg xmlns="http://www.w3.org/2000/svg"width="24"height="24"viewBox="0 0 24 24"fill="none"stroke="currentColor" stroke-width="2"stroke-linecap="round"stroke-linejoin="round"class="feather feather-lock">
                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                   <input id="password1"name="password1" type="password"  class='form-control' placeholder="enter your password" onkeyup="validPassword1()">
                                    <span id="password1-error"></span>
                                </div>
                                <div class="password2 input-group">
                                <svg xmlns="http://www.w3.org/2000/svg"width="24"height="24"viewBox="0 0 24 24"fill="none"stroke="currentColor" stroke-width="2"stroke-linecap="round"stroke-linejoin="round"class="feather feather-lock">
                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg><input id="password2"name="password2" type="password" class='form-control'  placeholder="confirm your password" onkeyup="validPassword2()">
                                            <span id="password2-error"></span>
                                    </div>
                                    <button type='submit' id='register' name='register' class="d-none" >Sign Up</button>
                                    <button type="button"  onclick=" validateForm()" >Sign Up</button>
                            </div>
                        </form>
           
            </div>     
        </div>-->

    <!--
        <div class="container">
        <form id="form"  method="Post"  action="">
            <h1>Registration</h1>
            <div class="input-control  ">
                <label for="username">Username</label>
                <input  id="name" name="name" type="text" class='form-control' placeholder="enter your name" onkeyup="validName()">
                <span id="name-error"  ></span>
            </div>
            <div class="input-control">
                <label for="email">Email</label>
                <input id="email" name="email" type="text" class='form-control' placeholder="enter your email" onkeyup="validEmail()">
                <span id="email-error"></span>
            </div>
            <div class="input-control">
                <label for="password">Password</label>
                <input id="password1"name="password1" type="password"  class='form-control' placeholder="enter your password" onkeyup="validPassword1()">
                <span id="password1-error"></span>
            </div>
            <div class="input-control">
                <label for="password2">Password again</label>
                <input id="password2"name="password2" type="password" class='form-control'  placeholder="confirm your password" onkeyup="validPassword2()">
                <span id="password2-error"></span>
            </div>
            <button type='submit' id='register' name='register' class="d-none" >Sign Up</button>
           
            <button type="button"  onclick=" validateForm()" >Sign Up</button>
        </form>
    </div>
-->
<!--neumorphism-->
    <div class="container">
        
        <div class="form-group">
        <fieldset>
            <label class="form-label mt-4" for="readOnlyInput">Readonly input</label>
            <input class="form-control" id="readOnlyInput" type="text" placeholder="Readonly input here..." readonly="">
        </fieldset>
        </div>
        <div class="form-group has-success">
        <label class="form-label mt-4" for="inputValid">Valid input</label>
        <input type="text" value="correct value" class="form-control is-valid" id="inputValid">
        <div class="valid-feedback">Success! You've done it.</div>
        </div>
        <div class="form-group has-danger">
        <label class="form-label mt-4" for="inputInvalid">Invalid input</label>
        <input type="text" value="wrong value" class="form-control is-invalid" id="inputInvalid">
        <div class="invalid-feedback">Sorry, that username's taken. Try another?</div>
        </div>
        <div class="form-group">
        <label class="col-form-label col-form-label-lg mt-4" for="inputLarge">Large input</label>
        <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" id="inputLarge">
        </div>
        <div class="form-group">
        <label class="form-label mt-4">Floating labels</label>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        </div>
    </div>                
 <script src="assets/js/script.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>