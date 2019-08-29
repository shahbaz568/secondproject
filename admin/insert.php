<!DOCTYPE html>
<html>
<head>
	<title>shopping</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="strp.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

  <style type="text/css">
  	.upper{
  		width: 100%;
  		height: 20px;
  		background-color: blue;

  	}
  	.navi{
  		width: 100%;
  		height: 40px;
  		background-color: yellow;
  		list-style-type: none;
        float: left;
  	}
  	ul li{
  		list-style-type: none;
        float: left;
        line-height: 40px;
       padding-left: 20px;
  	}
  	.first{
  		width: 100%;
  		height: 500px;
  		background-color: black;
  		color: white;
       
  	}
  	.first p{
             padding-left: 30px;
             font-size: 20px;
  	}
  </style>

</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="upper">
					<p>shahbazh568@gmail.com</p>
				
					
				</div>
			</div>
		</div>
		
	</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">

					<h2>My shopping</h2>
			<div class="navi">

				<ul>
					<li><a href="../index.php">Home</a></li>
					<li><a href="product.php">Product</a></li>
					<li><a href="sell.php">Sell</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>

			    <center><h1>Product upload</h1></center>
                                           <center>
			    <table border="1px">
			    	<form method="post" action="insert.php" enctype="multipart/form-data">
			    	<tr>
			    		<td>Product name</td>
			    		<td><select name="pname">
			    			<option>Watch</option>
			    			<option>Shoes</option>
			    			<option>T-Shirt</option>
			    			<option>Jeans</option>
			    		</select></td>
			    	</tr>
			    	<tr>
			    		<td>Brand</td>
			    		<td><select name="bname">
			    			<option>woodland</option>
			    			<option>fastrack</option>
			    			<option>nike</option>
			    			<option>casual</option>
			    		</select></td>
			    	</tr>
			    	
			    	<tr>
			    		<td>Categary</td>
			    		<td><select name="Categary">
			    			<option>Watch</option>
			    			<option>Shoes</option>
			    			<option>T-Shirt</option>
			    			<option>Jeans</option>
			    		</select></td>
			    	</tr>
			    	<tr>
			    		<td>Image</td>
			    		<td><input type="file" name="img"></td>
			    	</tr>
			    	<tr>
			    		<td>price</td>
			    		<td><input type="number" name="price"></td>
			    	</tr>

			    	<tr>
			    		<td colspan="2"><input type="submit" name="submit" value="Upload" style="text-align: center;"></td>
			    	</tr>
			    	</form>
			    </table>
                                                  </center>
			    	</div>
			    </div>
		</div>
	</div>
</div>
                 


</body>
</html>


<?php

include('../connection.php');

if(isset($_POST['submit'])){

$proname = $_POST['pname'];
$bradname = $_POST['bname'];
$Categary = $_POST['Categary'];
$price = $_POST['price'];
$imgname = $_FILES['img']['name'];
$tempname = $_FILES['img']['tmp_name'];

move_uploaded_file($tempname, "../img/$imgname");

$sql = "INSERT INTO pinsert (pname , brand, Categary, image, price) VALUES('$proname', '$bradname', '$Categary', '$imgname','$price')";
$run = mysqli_query($conn,$sql);
if($run == true)
{
	?>
	<script type="text/javascript">
		alert('data inserted');
	</script>
	<?php	
}

else{
	?>
	<script type="text/javascript">
		alert('not inserted');
	</script>
	<?php
}
}

?>
