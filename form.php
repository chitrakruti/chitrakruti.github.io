<? php 
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['cont'];
$message=$_POST['msg'];
$to="chitrakruti260999@gmail.com"
$headers="From :$name<$email>";
$message="Name: $name \n\n Email: $email \n\n Contact: $contact  "
if(mail($to,$subject,$message,$headers))
{
echo "Mail sent";
}

else
{
echo "Error:please try again later..";
}
}
?>
<html>
<title>form<title>
<body>
<form action="" method="post">
<fieldset class="fs">
<legend class="legend">Contact Us</legend>
<table border="2" class="tab2">
<tr>
	<td>Name:</td>
	<td><input type="text" name="name" placeholder="Enter Name" width="40px"></td>
</tr>
<tr>
	<td>Email:</td>
	<td><input type="email" name="email" placeholder="Enter Email"></td>
</tr>
<tr>	
	<td>Contact No.:</td>
	<td><input type="text" name="cont" placeholder="Enter Number"></td>
</tr>
<tr>	
	<td>Message:</td>
	<td><textarea rows="5" cols="15" name="msg" placeholder="Enter Message"></textarea></td>
</tr>
<tr>	
	
	<td><input type="submit" value="Submit" name="submit"class="button"></td>
	<td><input type="reset" value="Reset" class="button"></td>
</tr>
</table>
</fieldset>
</form>
<body>
<html>


