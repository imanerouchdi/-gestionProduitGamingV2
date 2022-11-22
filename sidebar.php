<?php
    // afficher la somme de prix produit
        include("config/config.php");
        
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
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/0abe3e5cf3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
   
</head>
<body>

<div class="sidebar  " id="collapseExample">

  <a class="active" href="index.php">Home</a>
  <a href="#news">Categories</a>
  <a href="#contact">Product</a>
  <a href="#about">LogOut</a>
</div>

<!-- Page content -->
<div class="content ">
    <div class="row">
        <div class="card">
        <i class="bi bi-currency-dollar text-success fa-3x"></i>  
            <h1>Total Sales</h1>
            <p class="price"><?=  $result['total']?>$</p> 
            
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
        $sql="SELECT * FROM `produits` INNER JOIN categories on produits.id_categorie=categories.id_cat order by prix";
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
      
    </tr>
  <?php
    // if(isset($result)){
        while($produits=mysqli_fetch_assoc($result)):
    
    ?>
    <tr>
      <td><?= $produits['id']?></td>
      <td><?= $produits['name']?></td>
      <td><?= $produits['nom']?></td>
      <td><?= $produits['prix']?></td>
      <td><?= $produits['quantite']?></td>
      
    </tr> <?php endwhile?>
  </table>
  
</div>

    </div>
</div>





























<!-- <div class="container-box">
    <div class="navbar-top">
          
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark  flex-fill">
                <!-- <div class="container "> -->
                  <!-- offcanvas trigger -->
                  <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon  " data-bs-target="#offcanvasExample"></span>
                  </button>
                  <!-- offcanvas trigger -->
                  <a class="navbar-brand fw-bold text-uppercase " href="#">Admin Area</a>
                  <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon  " data-bs-target="#navbarNav"></span>
                  </button> 
                  <div class="collapse navbar-collapse   justify-content-end " id="navbarNav"> 
                    <a href="#" class="nav-link dropdown-toggle text-white " id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user mx-2 "></i>imane</i></a> 
                      <ul class="dropdown-menu dropdown-menu-lg-end ">
                        <li class="nav-item dropdown ">
                          <a class="nav-link active  text-secondary " aria-current="page" href="#"><i class="fa-solid fa-user mx-1"></i>Profil</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active text-secondary" aria-current="page" href="#"><i class="fa-solid fa-envelope mx-1"></i>Products <span class="badge text-white bg-danger mx-1">90</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-secondary " href="#"><i class="fa-solid fa-users mx-1"></i> Customers <span class="badge text-white bg-danger mx-1">80</span></a>                        
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-secondary" href="#"><i class="fa-solid fa-gear mx-1"></i>Produits Categories <span class="badge text-white bg-danger mx-1">50</span></a>
                        </li>
                        <div class=" border-top border-1">  <!--divider -->
                          <li class="nav-item">
                            <a class="nav-link disabled text-secondary"><i class="fa-solid fa-power-off mx-1"></i>Login Out </a>
                          </li>
                        </div>
                      </ul>
                  </div>
                <!-- </div>  -->
              </nav>
    <!-- </div>
    <div class="content-box">
        <div class="sidebar-box">
       
        <div class="main-content">
            
        </div>
    </div>
    </div> --> 

<!-- <div style="
    background: red;
    height: 100vh;
    display: flex;
    flex-direction: column;
">
    <div style="
    background: blue;
    height: 8%;
    display: flex;
"></div>
    <div style="
    background: yellow;
    height: 92%;
    display: flex;
    flex-direction: row;
">
        <div style="
    background: green;
    display: flex;
    flex: .2;
"></div>
        <div style="
    background: orange;
    display: flex;
    flex-direction: column;
    flex: .8;
"></div>
    </div>
</div> -->

</body>
</html>