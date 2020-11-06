<?php
$email=$_POST['email'];
$cpass=$_POST['cpass'];
$con=mysqli_connect('localhost','root','','medical');
$query="INSERT INTO `account`(`email`, `cpass`) VALUES ('$email','$cpass')";
$run=mysqli_query($con,$query);

if($run==TRUE){
	header("location:home.html");

exit;
}
else{
	echo "eror";
}

?>