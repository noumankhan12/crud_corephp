<?php 
include("config.php");
include ("header2.php"); 
 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>INDEX</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>



<?php
if ((!$_SESSION["loggedin"]) && (!$_SESSION["loggedin"])){
  header("location:admin.php");
}

?>

	<div class="container mt-5">
		<div class="row">
			<h1 class="btn-success text-center">WELLCOME TO ADMIN PANEL</h1>
			<div class="col-lg-12">
				</div>
				<table class="table table-dark">
				  <thead>
				    <tr>
				      <th scope="col">Order ID</th>
				      <th scope="col">Customer name</th>
				      
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  	$con = new mysqli($DB_SERVER,$DB_USER,$DB_PASSWORD,$DB_NAME);
						if ($con->connect_error) {
						trigger_error('Database connection failed: ' . $con->connect_error, E_USER_ERROR);
						}
				  	$query="SELECT * FROM `compain`";
				  	$user_result=mysqli_query($con,$query);
				  	while ($user_fetch=mysqli_fetch_assoc($user_result)) {
                          echo "
					  	<tr>
					      <td>$user_fetch[id]</td>
					      <td>$user_fetch[description]</td>					      
					    </tr>	
					    	";
						}
				?>

				  	
				  </tbody>
				</table>

		</div>
		
	</div>
    </body>
</html>
	
