<?php
session_start();
require('../../../../connect.php');


if (isset($_POST['save'])) 
{
    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $mobile = addslashes($_POST['mobile']);
    $turf_name = addslashes($_POST['turf_name']);
    $location = addslashes($_POST['location']);
    $type = addslashes($_POST['type']);
    $description = addslashes($_POST['description']);
    $initial_price = addslashes($_POST['initial_price']);
    $offer_price = addslashes($_POST['offer_price']);

    $target = "../../../uploads/" .basename($_FILES['photos']['name']);
    $image = $_FILES['photos']['name'];

    $name_slahs=addslashes($name);

    $turf_exist_query="SELECT * FROM turfs WHERE tname ='$turf_name'";
    $result=mysqli_query($con,$turf_exist_query);
    if ($result) {
        if (mysqli_num_rows($result)) {
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['tname']==$_POST['turf_name'])
            {
                echo"
                <script>
                alert('$result_fetch[email] - Turf already exist');
                window.location.href='add.php';
                </script>
                ";
            }
        }
        else{

            $query= "INSERT INTO `turfs`(`tname`, `owner_email`, `location`, `owner`, `owner_mobile`, `rating`, `type`, `description`, `offer price`, `initial price`, `image`) VALUES ('$turf_name','$email','$location','$name','$mobile','','$type','$description','$offer_price','$initial_price','$image')";
            
            if(mysqli_query($con,$query))
            {
                if (move_uploaded_file($_FILES['photos']['tmp_name'],$target)) {
                    # code...
                    echo"
                    <script>
                    alert('image Added Successfully');
                    window.location.href='add.php';
                    </script>
                    ";
                }
                else{
                    echo"
                    <script>
                    alert('problem adding image');

                    </script>
                    ";
                }

                echo"
                <script>
                alert('Turf Added Successfully');
                // window.location.href='add.php';
                </script>
                ";
            }
            else{
                echo"
                <script>
                alert('Cannot run query');
                window.location.href='add.php';
                </script>
                ";
            }
        }
    }
    else {
        echo"
        <script>
        alert('Cannot run Query');
        window.location.href='admin_register.php';
        </script>
        ";
    }




}

?>