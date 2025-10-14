<?php
require('../../../connect.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin_dash.css">

    <link rel="shortcut icon" href="../../../playlogo.png" type="image/svg+xml">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    
</head>
<body>
    <header class="header" data-header>
        <div class="container">

            <div class="overlay" data-overlay></div>

            <div class="header-search">
                <!--<input type="search" name="search" placeholder="Search Product..." class="input-field">
                <button class="search-btn" aria-label="Search">
                <ion-icon name="search-outline"></ion-icon>
                </button>-->        
            </div>

            <a href="#" class="logo">
                <img src="../../img/[removal.ai]_7e2a2cf3-a147-4bb2-889a-b8616d3836df-image.png" alt="Playspot logo" width="130" height="31">
            </a>

            <div class="header-actions">

                <button class="header-action-btn">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <?php
                        if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']==true) {
                            # code...
                            echo"<p>$_SESSION[name]</p>";
                        }
                        else{
                            echo"
                                <a href='../admin_login.php'><p class='header-action-label'>Log in</p></a>
                            ";
                        }
                    ?>
                </button>

                <?php
                if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']==true) {
                    # code...
                    echo"
                    <a href='logout.php'>
                        <div class='logout'>
                        <i class='fa fa-telegram' aria-hidden='true'></i>
                        <p>Log-Out</p>
                        </div>
                    </a>";
                    
                }
                ?>
        
            </div>

            <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <nav class="navbar" data-navbar>

                <div class="navbar-top">

                    <a href="#" class="logo">
                        <img src="../../img/[removal.ai]_7e2a2cf3-a147-4bb2-889a-b8616d3836df-image.png" alt="PlaySpot logo" width="130" height="31">
                    </a>

                    <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
                        <ion-icon name="close-outline"></ion-icon>
                    </button>

                </div>

                <ul class="navbar-list">

                    <li>
                        <a href="admin_dash.php" class="navbar-link" style="color:hsl(176, 35%, 63%);">Home</a>
                    </li>
                    
                    <li>
                        <a href="add/add.php" class="navbar-link">Add</a>
                    </li>

                    <li>
                        <a href="about/about.php" class="navbar-link">About</a>
                    </li>

                    <li>
                        <a href="#" class="navbar-link">Contact</a>
                    </li>

                </ul>

            </nav>

        </div>
    </header>
    
    
  <!------------------------Turfs----------------------->


    <section class="section product">
        <div class="container">

            <ul class="product-list">
                
            <?php
            //QUERY TO FETCH OWNER SPECIFIC TURFS
            $owner=$_SESSION['name'];
            $query="SELECT * FROM `turfs` WHERE owner='$owner'";
            $query_run = mysqli_query($con,$query);
            if(mysqli_num_rows($query_run)>0)
            {
              foreach ($query_run as $item) 
              {
                ?>
                  <li>
                    <div class="product-card">

                      <figure class="card-banner">

                        <a href="edit/edit.php?id=<?= $item['tid']?>">
                          <img src="../../uploads/<?= $item['image']?>" alt="<?= $item['tname']?>" loading="lazy" width="800" height="1034" class="w-100">
                        </a>
                        <div class="card-actions">
                            
                                <a href="edit/edit.php?id=<?= $item['tid']?>" class="card-action-btn book-btn">
                                    <p>Edit</p>
              
                                </a>

                        </div>
                      </figure>

                      <div class="card-content">
                        <h3 class="h4 card-title">
                          <a href="#"><?= $item['tname']?></a>
                        </h3>
                        
                        <div class="location">
                          <p class="loc">
                          <?= $item['location']?>
                          </p>
                        </div>

                        <div class="rating">
                          <p><?= $item['rating']?> <i class="fa fa-star" aria-hidden="true"></i></p>
                        </div>

                        <div class="card-price">
                          <data value="48.75">&#x20b9;<?= $item['offer price']?></data>

                          <data value="65.00">&#x20b9;<?= $item['initial price']?></data>
                        </div>
                      </div>

                    </div>
                  </li>
                <?php
              }
            }
            else {
              echo "No Turf's, ADD turf Now..!";
            }
            
            ?>

            </ul>

          
        </div>
    </section>



    <script src="admin_dash.js"></script>
</body>
</html>
