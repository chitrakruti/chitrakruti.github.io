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