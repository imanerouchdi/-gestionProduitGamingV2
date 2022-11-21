
<?php


$nameserver='localhost';
$username ='root';
$password='';
$database='gestionproduitgaming';
$conn=mysqli_connect($nameserver,$username,$password,$database);
if (!$conn) {
    header("location: errors/db.php");
    die("Connection failed: " . mysqli_connect_error($conn));
  }
  // else{
  //   echo "Database connected";
  // }
 

?>