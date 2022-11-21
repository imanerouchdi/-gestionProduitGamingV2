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
<!--  Content Wrapper . contains page content  -->
      <div class="wrapper">
        <div class="body-overlay "></div>
             <!-- start offcanvas [SideBare] -->
          <div class="offcanvas offcanvas-start sidebar-nav bg-dark text-white" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <!-- <div class="offcanvas-header">
            <i class="bi bi-speedometer2 ">Dashborad</i>
                 </div> -->
            <div class="offcanvas-body p-0">
                <div class=" nav navbar-dark">
                    <nav class="navbar-dark">
                        <ul class="navbar-nav me-auto mb-5 ">
                            <li class="nav-item mt-2">
                                <a href="#" class="nav-link px-3 active">
                                    <span class="me-2"><i class="bi bi-speedometer2 text-white  "></i></span>
                                    <span class="">Dashborad</span> 
                                </a>
                             </li><!--s[margin-padding*[left-right]start] e[margin-padding[left-right]*end] x(right-left) y[top-bottom] t[margin-top] b[margin bottom]-->
                            <li class="nav-item mt-2">
                                <a class="nav-link  active px-2 " data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <span class="me-2"> <i class="bi bi-tag-fill mx-1"></i></span>
                                    <span class=" ">Products </span><i class="bi bi-caret-down-fill mx-5"></i>
                                </a>
                            </li>
                            <div class="collapse " id="collapseExample">
                            
                                <div class="card card-body bg-dark text-white  ">
                                    <li class="nav-item  dropdown ">
                                        <a class="nav-link active  text-secondary px-3 active" aria-current="page" href="#">Insert Product</a>    
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active text-secondary" aria-current="page" href="#">Views All Products</a>
                                    </li>
                                </div>
                            
                            </div>
                            <li class="nav-item mt-1 text-white">
                                <a href="#" class="nav-link px-3 active text-white">
                                    <span class="me-2"><i class="bi bi-pencil-square"></i></span>
                                        <span class=""> Products Categories</span> 
                                </a>
                            </li>
                            <li class="nav-item mt-1 text-white">
                                <a href="#" class="nav-link px-3 active text-white">
                                    <span class="me-2"><i class="bi bi-layout-text-window-reverse"></i></span>
                                        <span class=""> Categories</span> 
                                </a>
                            </li> 
                            <li class="nav-item mt-1 text-white">
                                <a href="#" class="nav-link px-3 active text-white">
                                    <span class="me-2"><i class="bi bi-gear-fill"></i></span>
                                        <span class=""> slides</span> 
                                </a>
                            </li>  
                            <li class="nav-item mt-1 text-white">
                                <a href="#" class="nav-link px-3 active text-white">
                                    <span class="me-2"><i class="fa-solid fa-users"></i></span>
                                        <span class=""> view Customers</span> 
                                </a>
                            </li> 
                            <li class="nav-item mt-1 text-white">
                                <a href="#" class="nav-link px-3 active text-white">
                                    <span class="me-2"><i class="fa-solid fa-address-card"></i></span>
                                        <span class=""> Users</span> 
                                </a>
                            </li> 
                            <li class="nav-item mt-1 text-white">
                                <a href="#" class="nav-link px-3 active text-white">
                                    <span class="me-2"><i class="bi bi-power"></i></span>
                                        <span class=""> Log Out</span> 
                                </a>
                            </li>        
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    <!--Main content-->
        <div class="content ">
          <!-- start top navbar -->
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
                <div class="container-fluid ">
                  <!-- offcanvas trigger -->
                  <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon  " data-bs-target="#offcanvasExample"></span>
                  </button>
                  <!-- offcanvas trigger -->
                  <a class="navbar-brand fw-bold text-uppercase  mt-2" href="#">Admin Area</a>
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
                </div> 
              </nav>
            
    <!-- end top navbar -->
<!-- rows -->
        <div class="main-content  ">
          <div class="row ">
            <!-- first Card -->
            <div class="card mb-3 col-lg-3 col-md-6 col-sm-6">
                <div class="row "> <!--g:paddin bin culum -->
                  <div class="col">
                       <i class="bi bi-bar-chart-fill text-primary my-5 fa-3x"></i>        
                  </div>
                  <div class="col">
                    <div class="card-body ms-5">
                    <p class="category"><strong>Visits</strong></p>
                    <h3 class="card-title">70,340</h3>
                    </div>
                  </div>
                </div>
            </div>
            <!-- end first Card -->
            <!-- second card
            <div class="card mb-3 col-lg-3 col-md-6 col-sm-6">
                <div class="row gx-1"
                  <div class="col-md-4">
                     <i class="bi bi-cart-fill text-danger my-5 fa-3x"></i>       
                  </div>
                  <div class="col-md-8">
                    <div class="card-body ms-5">
                    <p class="category"><strong>Visits</strong></p>
                    <h3 class="card-title">70,340</h3>
                    </div>
                  </div>
                </div>
             </div>  -->
            <!-- end seconde card -->
            <!-- third seconde card
            <div class="card mb-3 col-lg-3 col-md-6 col-sm-6">
                <div class="row gx-1">
                  <div class="col-md-4">
                     <i class="bi bi-currency-dollar text-success my-5 fa-3x"></i>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body ms-5">
                    <p class="category"><strong>Visits</strong></p>
                    <h3 class="card-title">70,340</h3>
                    </div>
                  </div>
                </div>
           </div> --> 
            <!-- <div class="card mb-3 col-lg-3 col-md-6 col-sm-6">
                <div class="row gx-1">
                  <div class="col-md-4">
                     <i class="bi bi-currency-dollar text-success my-5 fa-3x"></i>      
                  </div>
                  <div class="col-md-8">
                    <div class="card-body ms-5">
                    <p class="category"><strong>Visits</strong></p>
                    <h3 class="card-title">70,340</h3>
                    </div>
                  </div>
                </div>
           </div> --> 
            <!-- end third card -->
        
        </div>
       </div>
<!--/.Main content-->

  </div>
</div>
<script src="assets/js/bootstrap.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

