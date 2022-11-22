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
      // afficher total de produit
      $sql_produit="SELECT COUNT(`id`) as totalproduit FROM `produits`";
      $statement=mysqli_query($conn,$sql_produit);
      $statement=mysqli_fetch_assoc($statement);



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
    <!-- Page content -->
    <div class="content ">
      <div class="row">
        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-green alert-dismissible fade show">
              <strong>Success!</strong>
              <?php 
                echo $_SESSION['message']; 
                unset($_SESSION['message']);// vide session apres load page
              ?>
          <?php endif ?>

      <div class="card">
            <i class="bi bi-bar-chart-fill text-primary  fa-3x"></i>        
            <h1>Product Count</h1>
            
            <p><?= $statement['totalproduit']?> Product</p>
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
        $sql="SELECT id,nom,categories.name  as type ,prix,quantite FROM `produits` INNER JOIN categories on produits.id_categorie=categories.id_cat ";
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
      <td><a href="updateproduits.php?id=<?= $produits['id'] ?>" ><button type="button" class="btn btn-outline-primary">Update</a>
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