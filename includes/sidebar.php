 <nav class="navbar navbar-inverse navbar-fixed-top"><!--navbar begin -->
    <div class="navbar-header"><!--navbar-header begin -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-exl-collapse"><!--navbar-toogle begin -->
            <span class="sr-only">Toggle Navigation</span>
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="index.php?dashboard" class="navbar-brand">Admin Area</a>
    </div><!--navbar-header finish -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="http://" class="dropdown-toggle " data-toggle="dropdown">
                <i class="fa fa-user"></i><b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="index.php?user_profile">
                        <li class="fa fa-fw fa-user">profil</li>
                    </a>
                </li>
                <li>
                    <a href="index.php?view_product">
                        <li class="fa fa-fw fa-envlope">product</li>
                        <span class="badge">7</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?view_customers">
                        <li class="fa fa-fw fa-users">customers</li>
                        <span class="badge">11</span>

                    </a>
                </li>
                <li>
                    <a href="index.php?view_cats">
                        <li class="fa fa-fw fa-gear">product categories</li>
                        <span class="badge">4</span>

                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <li class="fa fa-fw fa-power-off">Log Out</li>
                    </a>
                </li>
                
            </ul>
        </li>
    </ul>