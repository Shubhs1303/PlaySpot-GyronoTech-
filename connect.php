<?php

    $con=mysqli_connect("localhost","root","","playspot");
    if(mysqli_connect_error()){
        echo"<script>alert('Cannot connect to the DataBase');</script>";
        exit();
    }
?>