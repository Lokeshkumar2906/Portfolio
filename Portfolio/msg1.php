<?php
   $Name=$_POST['Name'];
   $email=$_POST['email'];
   $Message=$_POST['Message'];
   //database connection
   $conn= mysqli_connect('localhost','root','','contact_info');
   if($conn->connect_error){
    die('connection failed:' .$conn->connect_error);
   }
   else{
    $stmt=$conn->prepare("insert into msg(Name, email, Message) values(?, ?, ?)");
    $stmt->bind_param("sss",  $Name, $email, $Message);
    $stmt->execute();
    echo "Message sent successfully";
    header("location: index.html");
    $stmt->close();
    $conn->close();
   }
?>