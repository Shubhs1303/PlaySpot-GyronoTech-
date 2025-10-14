<?php 
require('../../../../connect.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../admin_dash.css">

    <link rel="shortcut icon" href="../../../../playlogo.png" type="image/svg+xml">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <link rel="stylesheet" href="add.css">

    <script src="img_file.js" defer></script>

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>

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
                <img src="../../../img/[removal.ai]_7e2a2cf3-a147-4bb2-889a-b8616d3836df-image.png" alt="Playspot logo" width="130" height="31">
            </a>

            <div class="header-actions">

                <button class="header-action-btn">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <?php
                        if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']==true) {
                            echo"<p>$_SESSION[name]</p>";
                        }
                        else{
                            echo"
                                <a href='../../admin_login.php'><p class='header-action-label'>Log in</p></a>
                            ";
                        }
                    ?>
                </button>

                <?php
                if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']==true) {
                    # code...
                    echo"
                    <a href='../logout.php'>
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
                        <img src="../../../img/[removal.ai]_7e2a2cf3-a147-4bb2-889a-b8616d3836df-image.png" alt="PlaySpot logo" width="130" height="31">
                    </a>

                    <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
                        <ion-icon name="close-outline"></ion-icon>
                    </button>

                </div>

                <ul class="navbar-list">

                    <li>
                        <a href="../admin_dash.php" class="navbar-link">Home</a>
                    </li>

                    <li>
                        <a href="add.php" class="navbar-link" style="color:hsl(176, 35%, 63%);">Add</a>
                    </li>

                    <li>
                        <a href="../about/about.php" class="navbar-link" >About</a>
                    </li>

                    <li>
                        <a href="#" class="navbar-link">Contact</a>
                    </li>

                </ul>

            </nav>

        </div>
    </header>

    <section>
   
        <div class="container">
            <div class="content">
            <form action="add_data.php" name="submit-to-google-sheet" method="POST" enctype="multipart/form-data">
                <div class="topic">Add Turf</div>
                <div class="input-box">
                <input type="text" name="name" required value="<?php
                    if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']==true) {
                        echo"$_SESSION[name]";
                    }
                ?>">
                <label>Enter your name</label>
                </div>


                <div class="input-box">
                <input type="text" name="email" required value="<?php
                    if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']==true) {
                        echo"$_SESSION[email]";
                    }
                ?>">
                <label>Enter your email</label>
                </div>

                <div class="input-box">
                <input type="text" name="mobile" required value="<?php
                    if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']==true) {
                        echo"$_SESSION[mobile]";
                    }
                ?>">
                <label>Enter your Phone no</label>
                </div>

                <div class="input-box">
                <input type="text" name="turf_name" required>
                <label>Enter Turf's name</label>
                </div>

                <div class="input-box">
                <input type="text" name="location" required>
                <label>Enter Turf's Location</label>
                </div>

                <div class="input-box">
                <label>Type</label>
                <select class="box" name="type" id="type">
                    <option value="football">Football</option>
                    <option value="cricket">Cricket</option>
                </select>
                </div>

                <div class="message-box">
                <textarea name="description" placeholder="Enter description" required style="padding:5px;"></textarea>
                </div>



                <div class="input-box">
                <input type="text" name="initial_price" required>
                <label>Intial Price</label>
                </div>

                <div class="input-box">
                <input type="text" name="offer_price" required>
                <label>Offer Price</label>
                </div>

                <div class="input-box">
                <input type="file" name="photos" style="padding-top:12px">
                <label>Add Image</label>
                </div>

                
                <div class="input-box">
                <input type="submit" name="save" value="SAVE" >
                </div>
                <span id="msg"></span>
                
            </form>
            </div>
        </div>
    </section>
                    
    <script src="../admin_dash.js"></script>
</body>
</html>