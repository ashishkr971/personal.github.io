<?php
$con=mysqli_connect('localhost','root','','medical');
if(isset($_POST['submit']))
{
	$emaill=$_POST['emaill'];
	$cpasss=$_POST['cpasss'];



$qry="SELECT * FROM `account` WHERE ` email`='$emaill' AND `cpass`='$cpasss'";
 $mysqli_result=mysqli_query($con,$qry);
 $count = mysqli_fetch_array($mysqli_result, MYSQLI_ASSOC);
 $row= mysqli_num_rows($mysqli_result);
 if($row==1)
 {
 	$data=mysqli_fetch_assoc($mysqli_result);
 	$id=$data['id'];
 	echo "id".$id;
 	
 }else
 {
 	?>
 	<Script>
 	alert("email or password not matched")
 	window.open("login.html",'_self');
 	</script>
 	<?php
 }}
?>