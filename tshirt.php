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
					<li><a href="index.php">Home</a></li>
					<li><a href="">About Us</a></li>
					<li><a href="">Contact Us</a></li>
					<li><a href="">Help</a></li>
				</ul>
			</div>

			    <div class="col-md-2">
			    	<div class="first">
			    		<h2>Brand</h2>
			    		<br>
			    		<p><a href="woodland.php">woodland</a></p>
			    		<p><a href="fastrack.php">Fastrack</a></p>
			    		<p><a href="nike.php">Nike</a></p>
			    		<p><a href="casual.php">casual</a></p>

			    		<h2>Categary</h2>
			    		<br>
			    		<p><a href=watch.php">watch</a></p>
			    		<p><a href="shoes.php">shoes</a></p>
			    		<p><a href="tshirt.php">T-shirt</a></p>
			    		<p><a href="jeans.php">Jeans</a></p>
			    	</div>
			    </div>
			    <div class="col-md-10">
			    	<div class="second">
			    		
			    		<?php
                       
                          include('connection.php');

                          $sql = "SELECT * FROM pinsert WHERE categary = 'T-shirt' " ;

                          $run = mysqli_query($conn,$sql);

                          while($data = mysqli_fetch_assoc($run)){

                                  $id = $data['id'];
                                  $name = $data['pname'];
                                  $img = $data['image'];

                                  
                          
			    		?>
			    	
			    		<div class="col-md-4"> 
			    			
			    			<?php echo "<img src='img/$img' style='width: 250px; height: 250px;'>";?>
                               <center>
			    			<p>product name <?php echo $data['pname'];?></p>
			    			<p>brand <?php echo $data['brand'];?></p>
			    			<a href="buy.php?pid=<?php echo $data['id'] ?>"><button class="btn-primary">Buy Now</button></a>
			    			        </center>
			    		</div>
			    		<?php
			    	}
			    	?>

			    	</div>
			    </div>
		</div>
	</div>
</div>
                 


</body>
</html>