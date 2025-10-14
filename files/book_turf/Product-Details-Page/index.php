<?php 
require('../../connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Product Details</title>
</head>
<body>
    <div class="container3">

        <?php
        if (isset($_GET['id'])) 
        {
            $tid=$_GET['id'];
            $query="SELECT * FROM `turfs` WHERE tid = $tid";
            $query_run=mysqli_query($con,$query);

            if (mysqli_num_rows($query_run)>0)
            {
                $data=mysqli_fetch_array($query_run);
                ?>
                <div class="box">
                    <div class="images">
                        <div class="img-holder active">
                            <img src="../uploads/<?= $data['image']?>">
                        </div>
                        <div class="img-holder">
                            
                        </div>
                    </div>
                    <div class="basic-info">
                        <h1><?= stripslashes($data['tname'])?></h1>
                        <p><?= stripslashes($data['location'])?></p>
                        <div class="rate">
                            <p><?= stripslashes($data['rating']);?> <i class="filled fas fa-star"></i></p>
                            
                        </div>
                        <span><?= stripslashes($data['offer price']);?></span>
                        <span class="line" style="margin-left: 5px;text-decoration: line-through; font-weight: 500; font-size: 19px; color: hsl(0, 0%, 44%);"><?= stripslashes($data['initial price']);?></span>
                        <div class="options">
                            <a href="#">BOOK NOW</a>
                        </div>
                    </div>
                    <div class="description">
                        <h4>Description</h4>
                        <p><?= stripslashes($data['description']);?></p>
                        <ul class="features">
                            <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Location : <?= stripslashes($data['location'])?></li>
                            <li><i class="fa fa-user-circle-o" aria-hidden="true"></i>Owner : <?= stripslashes($data['owner'])?></li>
                            <li><i class="fa fa-futbol-o" aria-hidden="true"></i>Type : <?= stripslashes($data['type'])?></li>
                        </ul>
                        <ul class="social">
                            
                        </ul>
                    </div>
                </div>
                <?php
            }
            else
            {
                echo "Turf Not Found";
            }
        }
        else 
        {
            echo "Id not Found in url";
        }
        ?>

        
    </div>
</body>
</html>