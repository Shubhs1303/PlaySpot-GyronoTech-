<?php

require('../../connect.php');
function getAll($table){
    global $con;
    $query="SELECT * FROM $table";
    return $query_run = mysqli_query($con,$query);
}

function owner_specific($owner){
    global $con;
    $query="SELECT * FROM `turfs` WHERE owner='$owner'";
    return $query_run = mysqli_query($con,$query);
}

?>