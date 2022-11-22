<?PHP
include("config/config.php");

if(isset($_POST['email'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="select * from user where email='$email' and '$password'";
    $result=mysqli_query($sql,$conn);
    if(mysqli_num_rows($result)==1){
        echo"connect has succesfly";
        header("location:sidem.php");
    }else{
        echo "pass word incor";
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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="bootstrap-opc.css"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/style2.css">
    
</head>
<body>
<div class="bg-img">
  <form action="/sidem.php" class="container" method="POST">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" class="btn">Login</button>
  </form>
</div>
   





    
<script src="assets/js/script.js"></script>
<!-- <script src="assets/js/bootstrap.js"></script> -->
</body>
</html>