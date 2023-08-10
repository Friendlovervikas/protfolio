<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Conenction successful";
}else{
    echo "No Conenction successful";
}

 mysqli_select_db($con,'protolio');

$user = $_POST['user'];
$email = $_POST['email'];
$number = $_POST['number'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$query ="insert into protfoliodata (user,email,number,subject,message)
values('$user','$email','$number','$subject','$message')";
mysqli_query($con,$query);
header('location:index.php');
?>