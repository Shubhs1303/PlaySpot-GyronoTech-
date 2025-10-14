<?php 
require('connect.php');
session_start();
$email=$_POST["email"];

    $query="SELECT * FROM `users` WHERE `email`='$email'";
    $query2="SELECT name FROM `users`";
    $result=mysqli_query($con,$query);
    $result2=mysqli_query($con,$query2);

    if($result){
        if(mysqli_num_rows($result)==1){
            $result_fetch=mysqli_fetch_assoc($result);
            if(password_verify($_POST['password'],$result_fetch['password']))
            {
                $_SESSION['logged_in']=true;
                $_SESSION['email']=$result_fetch['email'];
                $_SESSION['name']=$result_fetch['name'];
                header("location: files/landing/turfs.php");
            }
            else
            {
                echo"
                <script>
                alert('incorrect password');
                window.location.href='index.php';
                </script>
                ";
            }
        }
        else {
            echo"
            <script>
            alert('Email not registered');
            window.location.href='index.php';
            </script>
            ";
        }

    }
    else {
        echo"
        <script>
        alert('Cannot run Query');
        window.location.href='index.php';
        </script>
        ";
    }


?>