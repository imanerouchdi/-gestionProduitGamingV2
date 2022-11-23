<?php
        include("config/config.php");
        //  include("sidem.php");
        include('functions/script.php');

        
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter produit</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/0abe3e5cf3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/styli.css">
</head>
<body class="bg">
   <div class="div d-flex justify-content-center align-content-center pt-5 ">
    <div class="img col-lg-4  col-sm-12 ">
    <div class="container col-lg-12  mt-5 pb-4  ">
        <form method="POST" action="" id="form" class="col-lg-10 col-md-10 col-sm-12 mx-auto rounded-pill h-50">
            <?php
            ?>
            <h1 class="fst-italic fs-4 text-center "> Ajouter Produit</h1>
            <div class="form-group has-success ">
                <label class="form-label mt-4" for="inputDefault">Nom produit</label>
                <input type="text"  class="form-control  d-none " name="id" value="" >
                <input type="text"  class="form-control "  name="nom" value="">
            </div>
            <div class="form-group has-danger">
            <label class="form-label mt-4" for="inputDefault">Type de Categorie</label>
            <select class="form-select" aria-label="Default select example" id="categorie" name="categorie">
            <?php
                $sql_select_data="SELECT * FROM categories  ";
        
                $result=mysqli_query($conn,$sql_select_data);
                while($row=mysqli_fetch_assoc($result)){
            ?>
                <option  value="<?php echo $row['id_cat']?>" <?php echo ($row['id_cat']==$row['id_cat']) ? "selected" : "" ?>><?php echo $row['name']?></option>
            <?php 
            }
            ?>
            </select>
            </div>
            <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">prix de produit</label>
            <input type="text" class="form-control" name="prix" value="">
            </div>
            <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Quantite</label>
            <input type="text" class="form-control" name="quantite" value="">
            <button name="insert" type="submit" class="btn btn-primary w-100 mt-4" >Add</button></a>
        </div>
    </form>
         </div>   
    </div>        
    </div>
</body>
</html>