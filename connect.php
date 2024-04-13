<?php
    $fullname =$_POST['fullname'];
    $email =$_POST['email'];
    $common =$_POST['common'];
    $discription =$_POST['discription'];
    $location =$_POST['location'];

    $conn = new mysqli('localhost','root','','trashtalks');
    if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into contribution(fullname,email,common,discription,location) values(?,?,?,?,?");
        $stmt->bind_param("sssss",$fullname,$email,$common,$discription,$location);
        $stmt->execute();
        echo "Submitted";
        $stmt->close();
        $conn->close();
    }
?>