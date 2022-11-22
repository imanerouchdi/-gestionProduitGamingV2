<?php
        include("config/config.php");
        //  include("sidem.php");
        include('functions/update.php');

        
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/0abe3e5cf3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/styli.css">
</head>
<body class="body_up" id=>
    <div class="container border border- border-3 mt-5 ">
        <form method="POST" action="functions/script.php.php" id="form" class="col-lg-8 col-md-6 col-sm-12 mx-auto">
            <?php
                $result=
                
            
            ?>
            <h1 class="justify-content-center ">update Product</h1>
            <div class="form-group has-success">
            <label class="form-label mt-4" for="inputDefault">Nom produit</label>
            <input type="text"  class="form-control  d-none " name="id" value="<?= $update_produit['id']?>" >
            <input type="text"  class="form-control "  name="nom" value="<?= $update_produit['nom']?>">
            </div>
            <div class="form-group has-danger">
            <label class="form-label mt-4" for="inputDefault">Type de Categorie</label>
            <select class="form-select" aria-label="Default select example" id="categorie" name="categorie">
            <?php
                $sql_select_data="SELECT * FROM categories  ";
        
                $result=mysqli_query($conn,$sql_select_data);
                while($row=mysqli_fetch_assoc($result)){
            ?>
                <option  value="<?php echo $row['id_cat']?>" <?php echo ($update_produit['id_cat']==$row['id_cat']) ? "selected" : "" ?>><?php echo $row['name']?></option>
            <?php 
            }
            ?>
            </select>
            </div>
            <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">prix de produit</label>
            <input type="text" class="form-control" name="prix" value="<?= $update_produit['prix']?>">
            </div>
            <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Quantite</label>
            <input type="text" class="form-control" name="quantite" value="<?= $update_produit['quantite']?>">
            <a href="updateproduits.php?id=<?php echo $update_produit['id'] ?>">															
            
            <button name="update" type="submit" class="btn btn-primary w-100" >update</button></a>
        </div>
    </form>
            
            
    </div>
</body>
</html>