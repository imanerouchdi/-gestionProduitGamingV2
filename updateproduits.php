<?php
include("config/config.php");
//  include("sidem.php");

// get data
$id=$_GET['id'];
if(isset($_GET['id'])){
$sql_select_data="SELECT id,nom,categories.name  as type ,prix,quantite FROM `produits` INNER JOIN categories on produits.id_categorie=categories.id_cat where id = '$id' ";

$rows=mysqli_query($conn,$sql_select_data);
}
// $result_select = mysqli_fetch_assoc($result_select);


 


//udpadte  data

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="https://kit.fontawesome.com/0abe3e5cf3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
   
</head>
<body>
    <div class="container">
                
            <h1>update Product</h1>
            <?php
                $rows = mysqli_fetch_assoc($rows);
               

             ?>
            <div class="form-group has-success">
            <label class="form-label mt-4" for="inputDefault">Nom produit</label>
            <input type="text"  class="form-control  " name="id" value="" >
            <input type="text"  class="form-control "  name="nom" >
            </div>
            <div class="form-group has-danger">
            <label class="form-label mt-4" for="inputDefault">Type de Categorie</label>
            <input type="text"  class="form-control " name="typecategorie">
            </div>
            <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">prix de produit</label>
            <input type="text" class="form-control" name="prix" >
            </div>
            <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Quantite</label>
            <input type="text" class="form-control" name="quantite">
            </div>
            <div class="form-group ">
            <button type="button" class="btn btn-outline-info centre mt-5 w-100">Info</button>
        </div>
       
            
            
    </div>
</body>
</html>