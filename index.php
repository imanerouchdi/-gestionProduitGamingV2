<?php
    // afficher la somme de prix produit
      // session_start();
      
        include("config/config.php");
        include("functions/script.php");
        check();
        mysqli_stat($conn);
        // afficher total de prix produit
        $sql_prix="SELECT sum(prix) as total FROM produits";
        $result = mysqli_query($conn,$sql_prix);
        $result_prix = mysqli_fetch_assoc($result);
      // afficher total de produit
      $sql_produit="SELECT COUNT(`id`) as totalproduit FROM `produits`";
      $statement=mysqli_query($conn,$sql_produit);
      $statement=mysqli_fetch_assoc($statement);
      // afficher total de quantities
      $sql_qt="SELECT SUM(quantite)as totalquantite FROM produits";
      $rows_qt=mysqli_query($conn,$sql_qt);
      $result_qt=mysqli_fetch_assoc($rows_qt);
      



?>
<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8">
    
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" >
    <title>Dashbord Admin</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">CodingLab</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li class="log_out" name="logout">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name" >Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
    </nav>

        <div class="home-content">
            <div class="overview-boxes">
                <div class="box">
                <div class="right-side">
                    <div class="box-topic">Total Product </div>
                    <div class="number"><?= $statement['totalproduit']?></div>
                    <div class="indicator">
                    <!-- <i class='bx bx-up-arrow-alt'></i> -->
                    <!-- <span class="text">Up from yesterday</span> -->
                    </div>
                </div>
                <i class='bx bx-cart-alt cart'></i>
                </div>
                <div class="box">
                <div class="right-side">
                    <div class="box-topic">Total Price</div>
                    <div class="number"><?=  $result_prix['total']?></div>
                    <div class="indicator">
                    <!-- <i class='bx bx-up-arrow-alt'></i> -->
                    <!-- <span class="text">Up from yesterday</span> -->
                    </div>
                </div>
                <i class='bi bi-currency-dollar  cart two' ></i>
                </div>
                <div class="box">
                <div class="right-side">
                    <div class="box-topic">Total Quatities</div>
                    <div class="number"><?= $result_qt['totalquantite']?></div>
                    <div class="indicator">
                    <!-- <i class='bx bx-up-arrow-alt'></i> -->
                    <!-- <span class="text"> from yesterday</span> -->
                    </div>
                </div>
                <i class='bx bxs-cart-add cart tree' ></i>
                </div>
                <!-- <div class="box">
                <div class="right-side">
                    <div class="box-topic">Total Categorie</div>
                    <div class="number">11,086</div>
                    <div class="indicator">
                        <i class='bx bx-down-arrow-alt down'></i> 
                        <span class="text">Down From Today</span> 
                    </div>
                </div>
                <i class='bx bxs-cart-download cart four' ></i>
            </div> -->
        </div>
     
    <div style="overflow-x:auto;">
        <?php
        include("config/config.php");

        mysqli_stat($conn);
        $sql="SELECT id,nom,categories.name  as type ,prix,quantite FROM `produits` INNER JOIN categories on produits.id_categorie=categories.id_cat ";
        $result = mysqli_query($conn,$sql);
        ?>
        
        <?php
        if (isset($_SESSION['message'])): ?>
				<div class="alert alert-success alert-dismissible fade show">
					<strong>Success!</strong>
					<?php 
						echo $_SESSION['message']; 
						unset($_SESSION['message']);// vide session apres load page
					?>
					<button type="button" class="btn-close" data-bs-dismiss="alert"></span>
				</div>
			<?php endif ?>

    <div class="sales-boxes">
        <div class="recent-sales box">
            <div class="title">Recent Sales  <a href="insert.php" class="btna text-white"><button type="button" class="btn-add text-white-5 ">+ Add Product</a></button>
</div>
                
                <div class="sales-details">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nom Product</th>
                                <th scope="col">Categorie</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Quantite</th>
                            </tr> 
                        </thead>
                        <tbody>
                            <tr><?php
                                while($produits=mysqli_fetch_assoc($result)):
                                ?>
                                <th scope="row"><?= $produits['id']?></th> 
                                    <td><?= $produits['nom']?></td>
                                    <td><?= $produits['type']?></td>
                                    <td><?= $produits['prix']?></td>
                                    <td><?= $produits['quantite']?></td>
                                    <td>
                                      <a href="updateproduits.php?id=<?php echo $produits['id'] ?>" class="btn btn-xs btn-icon btn-warning   " >
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="#000000" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">&lt;!--!  Atomicons Free 1.00 by @atisalab License - https://atomicons.com/license/ (Icons: CC BY 4.0) Copyright 2021 Atomicons --&gt;<path d="M20.41,2.41l1.18,1.18a2,2,0,0,1,0,2.82l-10.3,10.3a1,1,0,0,1-.7.29H7V13.41a1,1,0,0,1,.29-.7l10.3-10.3A2,2,0,0,1,20.41,2.41Z"></path><path d="M21,14v6a2,2,0,0,1-2,2H4a2,2,0,0,1-2-2V5A2,2,0,0,1,4,3h6"></path></svg></i></a>
                                      <a  href="functions/script.php?id=<?php echo $produits['id'] ?>"  class="btn btn-xs btn-icon btn-danger " id="supprimer" >
                                      <i class="bx bx-trash   " id="supprimerIcon"></i></a>
														
                            
                                    </td>
                                </tr>
                                <?php endwhile?>
                            <tr>  
                        </tbody>
                    </table>
                </div>
            </div>

        <div class="top-sales box">
            <!-- <div class="title">Top Seling Product</div> -->
              <!-- <ul class="top-sales-details"> -->
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                  <div class=" w-100 mb-5">
                    
                    <h1 class="fs-2 ms-1  "> <img src="assets/image/femelle.png" style="width:50px" class="me-3"><?= $_SESSION['name'] ?></h1>
                    <p class=" fw-bold text-secondary" >Welcome in your Dashboard</p>
                    <p> Admin :
                      <?php
                        echo $_SESSION['name'];
                      ?>
                    </p>
                    
                  </div>

              <!-- </ul>         -->
            <!-- </div> -->
        </div>
    </div>
</section>

    <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
    sidebar.classList.toggle("active");
    if(sidebar.classList.contains("active")){
    sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
    }else
    sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
</script>
<script src="assets/js/script.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </body>
    </html>
