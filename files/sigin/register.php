<?php 

  require('../../connect.php');

  $name = $_POST["name"];
  $email = $_POST["email"];
  $mobile = $_POST["mobile"];
  $password = $_POST["password"];

    $user_exist_query="SELECT * FROM users WHERE email ='$email'";
    $result=mysqli_query($con,$user_exist_query);


    if ($result) {
        if (mysqli_num_rows($result)) {
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['email']==$_POST['email'])
            {
                echo"
                <script>
                alert('$result_fetch[email] - E-mail already exist');
                window.location.href='signin.php';
                </script>
                ";
            }
        }
        else{

            $pass=password_hash($password,PASSWORD_BCRYPT);
            $query="INSERT INTO `users`(`name`, `email`, `mobile`, `password`) VALUES ('$name','$email','$mobile','$pass');";
            if(mysqli_query($con,$query))
            {
                echo"
                <script>
                alert('Registered Successfully');
                window.location.href='../../index.php';
                </script>
                ";
            }
            else{
                echo"
                <script>
                alert('Cannot run query');
                window.location.href='signin.php';
                </script>
                ";
            }
        }
    }
    else {
        echo"
        <script>
        alert('Cannot run Query');
        window.location.href='signin.php';
        </script>
        ";
    }

    mysqli_close($conn);

?>