<?php

if(isset($_POST['submit']))
{
$fname =$_REQUEST["fname"];
$lname =$_REQUEST["lname"];
$email =$_REQUEST["email"];
$image =$_REQUEST["image"];
echo "$fname \n $lname \n $email \n $image";
$to="tejashatle3@gmail.com";
$headers="From: tejashatle3@gmail.com";
$message="Name: $fname ";
if(mail($to,$image,$message,$headers)){
echo "sent";
}

else{
echo "error";
}
}
?>