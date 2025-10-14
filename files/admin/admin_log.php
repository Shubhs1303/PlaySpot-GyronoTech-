<?php 
require('../../connect.php');
session_start();
$email=$_POST["email"];

    $query="SELECT * FROM `admin` WHERE `email`='$email'";
    $query2="SELECT name FROM `admin`";
    $query3="SELECT mobile FROM `admin`";

    $result=mysqli_query($con,$query);
    $result2=mysqli_query($con,$query2);
    $result3=mysqli_query($con,$query3);

    if($result){
        if(mysqli_num_rows($result)==1){
            $result_fetch=mysqli_fetch_assoc($result);
            if(password_verify($_POST['password'],$result_fetch['password']))
            {
                $_SESSION['admin_logged_in']=true;
                $_SESSION['email']=$result_fetch['email'];
                $_SESSION['name']=$result_fetch['name'];
                $_SESSION['mobile']=$result_fetch['mobile'];
                header("location: admin_dash/admin_dash.php");
            }
            else
            {
                echo"
                <script>
                alert('incorrect password');
                window.location.href='admin_login.php';
                </script>
                ";
            }
        }
        else {
            echo"
            <script>
            alert('Email not registered');
            window.location.href='admin_register.php';
            </script>
            ";
        }

    }
    else {
        echo"
        <script>
        alert('Cannot run Query');
        window.location.href='admin_login.php';
        </script>
        ";
    }


?>