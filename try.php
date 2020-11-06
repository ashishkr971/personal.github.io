<?php
$con=mysqli_connect('localhost','root','','medical');
if(isset($_POST['submit']))
{
	$emaill=$_POST['emaill'];
	$cpasss=$_POST['cpasss'];



  $sql = "select *from account where  email = '$emaill' and cpass = '$cpasss'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
           ?>
 	<Script>
 	
 	window.open("home.html",'_self');
 	</script>
 	<?php 
        }  
        else{  
           ?>
 	<Script>
 	alert("email or password not matched")
 	window.open("login.html",'_self');
 	</script>
 	<?php
        }  }  
?>