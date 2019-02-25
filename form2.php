<html>
<title>php</title>
<?php
//echo "$fname \n $lname \n $email";
if(isset($_POST['submit']))
{
$fname =$_REQUEST["fname"];
$lname =$_REQUEST["lname"];
$email =$_REQUEST["email"];
$to="tejashatle3@gmail.com";
$headers="From: tejashatle3@gmail.com";
$message="Name: $fname ";
if(mail($to,$lname,$message,$headers)){
echo "sent";
}

else{
echo "error";
}
}
?>

<body>

<form action="" method="post">
Enter first name
<input type="text"name="fname"><br>
Enter last name
<input type="text"name="lname"><br>
Enter email name
<input type="text"name="email"><br>

<input type="submit" value="Submit" name="submit">
</form>
</body>
</html>