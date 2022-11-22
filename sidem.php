<?php
    // afficher la somme de prix produit
        include("config/config.php");
        // $id=$_GET['id'];
        mysqli_stat($conn);
         //SQL SELECT
        $sql="SELECT sum(prix) as total FROM produits";
        $result = mysqli_query($conn,$sql);
        $result = mysqli_fetch_assoc($result);
        // return $result;




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Area</title>
     <link rel="stylesheet" href="bootstrap.min.css">
    <script src="https://kit.fontawesome.com/0abe3e5cf3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
   
</head>
<body>
    
<button class="navbar-toggler d-flex" type="button"data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>
         
            <a class="navbar-brand fw-bold text-uppercase me-auto ms-" href="#">frontend</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" data-bs-target="#navbarSupportedContent"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              
    <div class="sidebar  " id="collapseExample">
          <a class="active" href="index.php">Home</a>
      <a href="#news">Categories</a>
      <a href="#contact">Product</a>
      <a href="#about">LogOut</a>
      </div>
          </div>



<!-- Page content -->
<div class="content ">
  <div class="row">
  <div class="card">
            <i class="bi bi-bar-chart-fill text-primary  fa-3x"></i>        
            <h1>Tailored Jeans</h1>
            <p class="price">$19.99</p>
            <p>Some text about the jeans..</p>
            <p><button>Add to Cart</button></p>
        </div>
        <div class="card">
        <i class="bi bi-currency-dollar text-success fa-3x"></i>  
            <h1>Total Sales</h1>
            <p class="price"><?=  $result['total']?>$</p> 
            
            <p>Some text about the jeans..</p>
            <p><button>Add to Cart</button></p>
        </div>
        <div class="card">
            <i class="bi bi-bar-chart-fill text-primary fa-3x"></i>        
            <h1>Tailored Jeans</h1>
            <p class="price">$19.99</p>
            <p>Some text about the jeans..</p>
            <p><button>Add to Cart</button></p>
        </div>
        <div class="card">
            <i class="bi bi-bar-chart-fill text-primary  fa-3x"></i>        
            <h1>Tailored Jeans</h1>
            <p class="price">$19.99</p>
            <p>Some text about the jeans..</p>
            <p><button>Add to Cart</button></p>
        </div>
    </div>
    <div class="row>">
        <h2>Responsive Table</h2>
        <p>If you have a table that is too wide, you can add a container element with overflow-x:auto around the table, and it will display a horizontal scroll bar when needed.</p>
        <p>Resize the browser window to see the effect. Try to remove the div element and see what happens to the table.</p>

        <div style="overflow-x:auto;">
        <?php
        include("config/config.php");

        mysqli_stat($conn);
         //SQL SELECT
        $sql="SELECT id,nom,categories.name  as type ,prix,quantite FROM `produits` INNER JOIN categories on produits.id_categorie=categories.id_cat order by prix";
        $result = mysqli_query($conn,$sql);
        
        //   return $result;
        
        
        // id,categories.name,nom,prix,quantite
        
        
        ?>
  <table class="table">
   
    <tr>
      <th>id Product</th>
      <th>Nom </th>
      <th>type Categorie</th>
      <th>price</th>
      <th>quantite</th>
      <th>Action</th>
      
    </tr>
  <?php
    // if(isset($result)){
        while($produits=mysqli_fetch_assoc($result)):
          // $id=$produits['id'];
    ?>
    <tr>
      <td><?= $produits['id']?></td>
      <td><?= $produits['nom']?></td>
      <td><?= $produits['type']?></td>
      <td><?= $produits['prix']?></td>
      <td><?= $produits['quantite']?></td>
      <td><a href="updateproduits.php?id=<?php $produits['id'] ?>" ><button type="button" class="btn btn-outline-primary">Update</a>
      </button>
      <!-- <button type="button" class="btn btn-outline-danger">Delete -->
      <!-- <a href="updateproduits.php?id=<?php echo $produits['id']?>" > -->
      <!-- </button> -->
    </td>
      
    </tr> <?php endwhile?>
  </table>
  
</div>

    </div>
</div>





</body>
</html>