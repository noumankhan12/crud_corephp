<?php include ("header.php"); 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>INDEX</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	
	<div class="container mt-5">
		<div class="row">
			<h1 class="btn-success text-center">WELLCOME TO SHOPPING CART</h1>
				 <form action="complaint-action.php" method="POST">
						 <div class="form-group">
							    <h5>Enter Your Complain</h5>
							    <input type="txtarea" name="description" class="form-control" placeholder="email@example.com" required >
						 </div> 
					<input type="submit" class=" btn btn-danger " value=" Submit Your Complaint">
			   </form><br>

	    </div>	
	</div>

</body>
</html>