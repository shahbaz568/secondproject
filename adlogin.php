
<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login form</title>

	<style type="text/css">
		body{
			background-image: url(im9.jpg);
			background-size: cover;
		}
		.shahbaz{
			width: 400px;
			height: 350px;
			background-color: black;
			opacity: 0.5;
			margin-left: 40%;
			margin-top: 100px;
			border-radius: 10px;
			font-weight: bolder;
			/*box-shadow: 4px 4px rgba(0,0,0,0.5)   or 0.5 is the opecity*/
			box-shadow: 4px 4px grey;
			position: relative;
		}
		.shahbaz input[type=text]{

			width: 300px;
			height: 37px;
			margin-top: -70px;
			margin-left: 40px;
			border-radius: 10px;
			padding-left: 10px;
			font-size: 18px;
		}
		.shahbaz input[type=password]{

			width: 300px;
			height: 37px;
			margin-top: 0px;
			margin-left: 40px;
			border-radius: 10px;
			padding-left: 10px;
			font-size: 18px;
		}
		.shahbaz input[type=submit]{

			margin-left: 40px;
			width: 90px;
			height: 40px;
			background-color: skyblue;
			font-weight: bolder;
			border-radius: 10px;
			border: 2px solid white;
			font-size: 18px;
		}
		
	</style>
</head>
<body>
<div class="shahbaz">
	
	<p style="color: white; font-size: 25px; padding: 40px; line-height: 0px;">Login </p>
	<form action="" method="post">
		<input type="text" name="Username" placeholder="Enter the Name"><br><br>
		<input type="password" name="password" placeholder="Enter the password"><br><br>
		<input type="submit" name="submit" value="login">
	</form>
	
</div>

</body>
</html>
<?php

include('connection.php');
if(isset($_POST['submit'])){
$username = $_POST['Username'];
$password = $_POST['password'];
$count=0;
$qry = "SELECT * FROM `admin`";

$run = mysqli_query($conn,$qry);

while($data=mysqli_fetch_assoc($run)){ 

	  $user=$data['username'];
	  $pass=$data['password'];
	  if($user==$username & $pass==$password)  {
	   
        header('location: admin/aindex.php');

	   $count = 1+$count;  }
     }
     if($count==0){

     	?>
     	<script>
     		alert('username and password are not match');
     	</script>
     	<?php
     }
}
?>
