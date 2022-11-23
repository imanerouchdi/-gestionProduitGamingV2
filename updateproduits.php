<?php
        include("config/config.php");;
        include('functions/script.php');
        $id=$_GET['id'];
        
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Produit</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styli.css">
    
</head>
<body class="bg">
    <div class="div d-flex justify-content-center align-content-center pt-5 ">
        <div class="img col-lg-4  col-sm-12 ">
        <div class="container col-lg-12  mt-5 pb-4  ">     
        <div class="container">
        <form method="POST" action="functions/script.php" id="form" class="col-lg-10 col-md-10 col-sm-12 mx-auto rounded-pill h-50">
            <?php
                $result_edit=EditProduit($id);
                $update_produit=mysqli_fetch_assoc($result_edit);
                
            
            ?>
            <h1 class="fst-italic fs-4 text-center ">update Product</h1>
            <div class="form-group has-success ">
            <label class="form-label mt-4" for="inputDefault">Nom produit</label>
            <input type="hidden"  class='form-control'  name="id" value="<?= $update_produit['id']?>" >
            <input type="text"  class='form-control'   name="nom" value="<?= $update_produit['nom']?>">
            </div>
            <div class="form-group has-success ">
            <label class="form-label mt-4" for="inputDefault">Type de Categorie</label>
            <select  class="form-select" id="validationTooltip04" required aria-label="Default select example" id="categorie" name="categorie">
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
            <div class="form-group has-success ">
            <label class="form-label mt-4" for="inputDefault">prix de produit</label>
            <input type="text"class='form-control'  name="prix" value="<?= $update_produit['prix']?>">
            </div>
            <div class="form-group has-success ">
            <label class="form-label mt-4" for="inputDefault">Quantite</label>
            <input type="text" class="form-control" name="quantite" value="<?= $update_produit['quantite']?>">
            <a href="updateproduits.php?id=<?php echo $update_produit['id'] ?>">															
            
            <button name="update" type="submit" class="btn btn-primary w-100 mt-4">update</button></a>
        </div>
    </form>
            
            
    </div>
</body>
</html>