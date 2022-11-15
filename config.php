
<?php


$nameserver='localhost';
$username ='root';
$password='';
$database='gestionProduitGaming';
$conn=mysqli_connect($nameserver,$username,$password,$database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
 

?>