<?php 
include('../functions/myfunctions.php');
require('../../connect.php');
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlaySpot</title>
    <link rel="stylesheet" href="../landing/turfs.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link rel="shortcut icon" href="../../playlogo.png" type="image/svg+xml">

    <!--Product-Details-Page css  links-->
    <link rel="stylesheet" href="Product-Details-Page/css/style.css">
    <link rel="stylesheet" href="Product-Details-Page/css/style.css">


    
</head>
<body>
  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <div class="header-search">
        <!-- <input type="search" name="search" placeholder="Search Product..." class="input-field">

        <button class="search-btn" aria-label="Search">
          <ion-icon name="search-outline"></ion-icon>
        </button>  -->       
      </div>

      <a href="#" class="logo">
        <img src="../img/[removal.ai]_7e2a2cf3-a147-4bb2-889a-b8616d3836df-image.png" alt="Playspot logo" width="130" height="31">
      </a>

      <div class="header-actions">

        <button class="header-action-btn">
          <i class="fa fa-user" aria-hidden="true"></i>
          <?php
              if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {
                  # code...
                  echo"<p style='margin-top: 5px;'>$_SESSION[name]</p>";
              }
              else{
                  echo"
                      <a href='../../index.php'><p class='header-action-label'>Sign in</p></a>
                  ";
              }
          ?>
        </button>

        <?php
          if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {
              # code...
              echo"
              <a href='../landing/logout.php'>
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

          <a href="turfs.php" class="logo">
            <img src="../img/[removal.ai]_7e2a2cf3-a147-4bb2-889a-b8616d3836df-image.png" alt="PlaySpot logo" width="130" height="31">
          </a>

          <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li>
            <a href="#home" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="#" class="navbar-link">About</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Contact</a>
          </li>

        </ul>

      </nav>

    </div>
  </header>
  <?php
  //Product-Details-Page 
  include('Product-Details-Page/index.php');
  ?>

  <script src="../landing/turfs.js"></script>
</body>
</html>