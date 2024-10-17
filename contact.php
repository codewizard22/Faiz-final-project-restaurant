<?php

include("connect.php");



if(isset($_POST['send'])){
   $Name = $_POST['name'];
   $Phone = $_POST['phone'];
   $Email = $_POST['email'];


$que = "INSERT INTO connection (name, phone, email) VALUES ('$Name','$Phone', '$Email')";
$result = mysqli_query($conn, $que);

if($result){
    echo"Data inserted successfull";

    }else {
        echo "Error:" . mysqli_error($conn);
    }
}
?>